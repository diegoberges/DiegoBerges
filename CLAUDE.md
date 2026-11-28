# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

Personal portfolio site for Diego Berges, served at diegoberges.com. Built with Astro 7, Tailwind CSS 4 and Flowbite as the UI component library, using pnpm as the package manager.

## Commands

- `pnpm install` — install dependencies
- `pnpm run dev` / `pnpm run start` — start the Astro dev server
- `pnpm run build` — type-check (`astro check`) then build the static site to `dist/`
- `pnpm run preview` — preview the production build locally
- `pnpm run lint` — lint (`eslint.config.mjs`, flat config, using `eslint-plugin-astro`'s `recommended` config + `@typescript-eslint/parser` for the `.astro` frontmatter)
- `pnpm run format` — format with Prettier (`prettier-plugin-astro` handles `.astro` files)
- `pnpm run test` — run unit tests with Vitest (`vitest.config.ts` uses Astro's `getViteConfig()` helper). No test files exist yet, so this currently passes trivially (`--passWithNoTests`).

## Architecture

- **Framework**: Astro 7. No client-side framework (React/Vue/etc.) is integrated — pages are plain `.astro` components.
- **Styling**: Tailwind CSS 4 via the official `@tailwindcss/vite` plugin (configured in `astro.config.mjs`) — **not** the deprecated `@astrojs/tailwind` integration. There is no `tailwind.config.mjs`; everything (imports, theme, plugins) lives in `src/styles/global.css`, which also pulls in Flowbite's default theme and Tailwind plugin (`@plugin "flowbite/plugin"`). Class scanning is scoped to `src/` via `@import "tailwindcss" source("../")`: without it Tailwind scans the whole repo (including `.agents/skills/` docs) and ships unused classes. If you add an interactive Flowbite component, add `@source "../../node_modules/flowbite";` back so its classes are generated.
- **UI components**: Flowbite (`flowbite` npm package) is the component library, currently used only for its theme tokens (e.g. `text-heading`). Its JS is **not** loaded because the page has no interactive components; if you add one (dropdown, modal, etc.), restore the side-effect `import "flowbite"` in a `<script>` inside `Layout.astro` so it auto-inits from its `data-*` attributes.
- **Routing**: file-based via `src/pages/`; currently a single page, `index.astro`, composed from `src/components/Presentation.astro` (header/bio) and `src/components/Experience.astro` (work-experience timeline, driven by an `EXPERIENCE` array of objects, rendered through `ExperienceItem.astro`).
- **Layout**: `src/layouts/Layout.astro` defines the shared HTML shell (meta tags, favicon, font loading) and wraps page content via `<slot />`. The `<main>` element is capped at an 800px-wide centered column (`w-[800px] max-w-[calc(100%-2rem)] mx-auto`) so content has side margins/gutters on narrower viewports — this is easy to accidentally drop when touching the layout.
- **Shared components**: `src/components/shared/` holds small reusable pieces (`SectionContainer`, `SocialPill`, `Badge`); `src/components/icons/` holds inline SVG icon components (GitHub, LinkedIn).
- **Fonts**: self-hosted via `@fontsource-variable/onest`, imported directly in `Layout.astro`. A `declare module "@fontsource-variable/onest"` ambient declaration in `src/env.d.ts` is required because the package ships no types (CSS-only), which `astro check` otherwise flags.
- **TypeScript**: extends `astro/tsconfigs/strict` (`tsconfig.json`), with `old` excluded (see below).

## The `old/` directory

`old/` (gitignored, not tracked) holds the previous version of the site — the Astro 4 / Tailwind 3 / Bun stack and its components (`Presentation`, `Experience`, etc.) — kept locally as a reference while migrating/redesigning screens onto the new stack. It's excluded from `tsconfig.json`, ESLint, and Prettier. Don't treat it as part of the working codebase.

## Agent skills

`.agents/skills/` (tracked via `skills-lock.json`) holds installed agent skills relevant to this project — consult the matching one before doing related work:

- `astro` — Astro components, pages, content collections, deployment, CLI.
- `tailwind-css-patterns` — Tailwind v4.1+ utility patterns, responsive/dark-mode/component composition.
- `frontend-design` — building distinctive, polished UI instead of generic-looking output.
- `accessibility` — WCAG 2.2 audits and fixes.
- `seo` — meta tags, structured data, technical SEO.
- `typescript-advanced-types` — generics, conditional/mapped types.
- `nodejs-backend-patterns`, `nodejs-best-practices` — installed but not currently applicable; this site has no backend/API.

## CI

`.github/workflows/ci.yml` runs on every push and pull request: a single `checks` job (pnpm install, `prettier --check .`, `pnpm run lint`, `pnpm run build` — the build also runs `astro check`). This is the job Vercel's Deployment Checks gate on (see below). Code quality is covered by a CI-based SonarCloud scan in `.github/workflows/build.yml` (project `diegoberges_DiegoBerges`, org `diegoberges`), running on pushes to `main` and on PRs. It uses **secretless analysis** (`SonarSource/sonarqube-auth-action` over GitHub OIDC, hence `id-token: write`), so there is no `SONAR_TOKEN` secret. Scanner config lives in `sonar-project.properties` (`.sonarcloud.properties` only applies to Automatic Analysis, which must stay off: the two conflict).

## Deployment (Vercel)

The site is hosted on Vercel and served at `diegoberges.com` (custom domain on the Vercel project, DNS and SSL already set up). The earlier GitHub Pages deployment (`deploy.yml`, `CNAME`) has been removed.

- Vercel's GitHub integration builds a deployment on every push, but only promotes to production once the `checks` job from `ci.yml` passes (Vercel Deployment Checks, configured in the dashboard under Project Settings → Build and Deployment).
- `astro.config.mjs` sets `site: 'https://diegoberges.com'`.
