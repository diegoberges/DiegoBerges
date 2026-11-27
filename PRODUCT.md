# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Users

A mixed, general audience with no single dominant visitor. The site works as a personal business card:

- Recruiters and companies assessing Diego for a senior frontend or tech lead role.
- Potential clients looking at him for freelance work.
- Other developers who want to see his background and trajectory.

All of them arrive to answer one question quickly: who Diego is, what level he works at and how to reach him.

## Product Purpose

diegoberges.com is the personal portfolio of Diego Berges, a web developer based in Zaragoza with more than 15 years of experience who specialises in Angular. It presents his bio and professional trajectory and sends visitors on to LinkedIn and GitHub. Success means a visitor leaves with a clear picture of his seniority and profile and knows where to contact him.

## Positioning

**Technical leadership.** The site presents Diego as more than an Angular developer: he leads frontend teams. The evidence is all real and comes from his experience:

- He leads frontend development and coordinates the team on public-administration projects (Gobierno de Aragón).
- He drives migrations from legacy code to modern Angular (Signals, standalone components, zoneless).
- He set up the team's code-review process (pull requests).
- He has applied performance practices in production.
- He has a 15-year track record that also includes .NET, databases, APIs and running a web department.

Angular expertise and breadth are supporting evidence for the leadership story. They are not the headline.

## Operating Context

Visitors usually arrive from a LinkedIn profile, a CV or a direct link. They read the bio, scan the experience timeline and leave through LinkedIn or GitHub. There is no conversion step on the site itself.

## Capabilities and Constraints

- A single static page with two parts: a presentation block (name, bio, social links) and the experience timeline.
- The experience data lives in the `EXPERIENCE` array in `src/components/Experience.astro`.
- Content is in Castilian Spanish only (`lang="es"`). No bilingual version is planned.
- Contact is through LinkedIn and GitHub only, by decision. There is no email and no form.
- It is a static site (Astro) deployed on Vercel. There is no backend.

## Brand Commitments

- The name is Diego Berges and the domain is diegoberges.com.
- The voice is first person, direct and close, as in "Hola, soy Diego Berges."

## Evidence on Hand

- Professional experience: three roles from 2015 to the present (Grupo Oesía ×2, Audinfor System SL), each with a summary, achievements and technologies (`src/components/Experience.astro`).
- A short bio (`src/components/Presentation.astro`).
- Profiles at linkedin.com/in/diegoberges and github.com/diegoberges.

The site has **none** of the following, and future work must not invent them: projects or case studies, a downloadable CV, a blog or articles, testimonials, client logos, metrics or numbers for achievements, a photo.

## Product Principles

1. **Seniority within seconds.** The first viewport must make his level and leadership role clear.
2. **Real evidence only.** Every claim comes from his actual experience. Nothing is padded or invented.
3. **Leadership first, technology second.** The stack backs up the story but does not take its place.
4. **Brief and scannable.** The site is a business card, not a long CV. It respects the reader's time.
5. **Every path leads to LinkedIn or GitHub.** Those are the only exits and they must always be easy to find.
