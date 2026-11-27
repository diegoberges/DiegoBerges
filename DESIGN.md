---
name: Diego Berges
description: Portfolio personal de un desarrollador web sénior: un expediente limpio en blanco y grises.
colors:
  paper: "#ffffff"
  ink: "#000000"
  ink-heading: "#101828"
  slate-strong: "#364153"
  slate: "#4a5565"
  slate-muted: "#6a7282"
  slate-faint: "#99a1af"
  mist-border: "#e5e7eb"
  mist: "#f3f4f6"
typography:
  display:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "1.875rem"
    fontWeight: 700
    lineHeight: 1.2
  headline:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "1.5rem"
    fontWeight: 700
    lineHeight: 1.33
  lead:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 400
    lineHeight: 1.6
  title:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "1.125rem"
    fontWeight: 600
    lineHeight: 1.55
  body:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.5
  label:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 400
    lineHeight: 1.43
  tag:
    fontFamily: "Onest Variable, sans-serif"
    fontSize: "0.75rem"
    fontWeight: 600
    lineHeight: 1.33
rounded:
  full: "9999px"
spacing:
  xs: "4px"
  sm: "8px"
  md: "16px"
  lg: "20px"
  xl: "40px"
components:
  social-pill:
    backgroundColor: "rgb(0 0 0 / 0.05)"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.full}"
    padding: "8px 16px"
  social-pill-hover:
    backgroundColor: "rgb(0 0 0 / 0.10)"
  tech-tag:
    backgroundColor: "{colors.mist}"
    textColor: "{colors.slate}"
    typography: "{typography.tag}"
    rounded: "{rounded.full}"
    padding: "4px 8px"
  timeline-dot:
    backgroundColor: "{colors.slate-strong}"
    rounded: "{rounded.full}"
    size: "12px"
---

# Design System: Diego Berges

## Overview

**Creative North Star: "El Expediente Limpio"**

The site reads like a well-typeset CV on a white page. The content is the design: name, bio and career history, laid out with order and no ornament. Hierarchy comes from type weight and grey values, not from colour, illustrations or containers. The page is a single narrow column centred on screen, read top to bottom, with the experience timeline as its spine.

The base is deliberately monochrome: white, black and a cool grey scale. The only colour on the page today comes from the official technology logos inside the tags. The system leaves room for **one** future brand accent, which is not yet defined. Until it is chosen, nothing adds colour of its own.

Density is moderate. Text is generous (the base size is 1.25rem with line height 1.6) and the space between career entries is wide, so each role can be scanned as its own block.

**Key Characteristics:**

- A white page with a monochrome cool-grey scale. No accent colour yet.
- A single variable sans-serif (Onest) at every level.
- An 800px centred column with a 1rem side gutter on narrow screens.
- A vertical timeline: a thin line, round markers, and a pulsing marker on the current role.
- Fully rounded pills (9999px) for social links and technology tags.
- Flat: no shadows, no cards, no layered surfaces.

## Colors

A neutral palette with a slight blue tint (Tailwind 4's cool `gray` scale) on pure white. Black is kept for the most important text.

### Neutral

- **Papel** (paper): the background of the whole page. It is the only surface; no layer sits above it.
- **Tinta** (ink): the main text, covering the h1, role titles and the base text of social pills. The bio uses the same ink at 80% opacity.
- **Tinta de Titular** (ink-heading): section headings such as "Experiencia" (Flowbite's `text-heading` token). Almost black with a blue undertone.
- **Pizarra Fuerte** (slate-strong): the fill of the timeline markers. Their border is ink-heading.
- **Pizarra** (slate): the text of technology tags.
- **Pizarra Apagada** (slate-muted): description text, achievement bullets and date ranges. This is the voice for secondary reading.
- **Pizarra Tenue** (slate-faint): the company and location under each role, and the vertical timeline line. It is the quietest level.
- **Bruma Borde** (mist-border): the outline of technology tags.
- **Bruma** (mist): the background of technology tags.

Social pills do not use tokens from the scale. They use black with alpha: a 5% fill, rising to 10% on hover, and a 10% border.

### Named Rules

**The One Accent Rule.** The system will accept a single brand colour in the future, and only one. Until it is defined, no element adds colour of its own. The technology logos are the only exception, because their colour belongs to the brand they represent and not to the site.

**The Grey Hierarchy Rule.** Importance drops in this order: ink, then slate-muted, then slate-faint. Never skip a step to make something stand out; to stand out, use more weight or size, not a darker grey.

## Typography

**Display Font:** Onest Variable (with sans-serif)
**Body Font:** Onest Variable (with sans-serif)

**Character:** A single humanist geometric sans-serif, self-hosted through `@fontsource-variable/onest`. It is clear and approachable. It gives the page the direct, friendly tone of "Hola, soy Diego Berges." without falling into the generic system-font look.

Onest is declared on `html` and overrides the default Flowbite stack (Inter), which is never used.

### Hierarchy

- **Display** (700, 1.875rem): the h1 greeting only, once per page.
- **Headline** (700, 1.5rem): section headings ("Experiencia"), with 40px of space above and 20px below.
- **Lead** (400, 1.25rem, line height 1.6): the base size of `<main>` and the bio under the greeting (at 80% opacity).
- **Title** (600, 1.125rem): the role name in each timeline entry.
- **Body** (400, 1rem): the role summary and achievement bullets, with `text-wrap: pretty`.
- **Label** (400, 0.875rem): dates, company and location, and the social pills.
- **Tag** (600, 0.75rem): the technology tags.

### Named Rules

**The One Family Rule.** All text uses Onest. Hierarchy comes from size and weight (400, 600 and 700), never from a second family.

## Layout

A single centred column 800px wide, capped at `calc(100% - 2rem)` so narrow screens always keep at least a 1rem gutter on each side. `<main>` adds 16px of inner padding. There is no grid, no sidebar and no breakpoints; the layout is fluid, and mobile only changes how lines wrap.

The rhythm runs on a 4px base. Sections open with 20px at the top, section headings sit 40px below what precedes them and 20px above their content, and entries in the timeline are 40px apart. Inside an entry the steps are small (8px between the date and the title, 8px before the description, 8px between tags).

The timeline is an `<ol>` with a 1px start border in slate-faint. Each entry is indented 16px, and its marker overlaps the line.

## Elevation & Depth

Completely flat. There are no shadows and no layered surfaces; every element sits directly on the white paper. Separation comes from space, thin 1px borders and the grey scale.

### Named Rules

**The Flat Page Rule.** Nothing floats. If an element needs to separate itself, use space or a 1px border, never a shadow.

## Shapes

There are two forms: the pill and the circle. Every interactive or labelling element is fully rounded (9999px), and the timeline markers are 12px circles. There are no cards or containers with partial corner radii. Borders are always 1px.

## Components

### Social Pills (Navigation)

These are the page's only exits, to LinkedIn and GitHub. They are discreet and tactile.

- **Shape:** a full pill (9999px).
- **Color:** a 5% black fill, a 10% black border and ink text, with a 20px brand icon on the left.
- **Spacing:** 8px vertical by 16px horizontal, with an 8px gap between icon and text and 8px between pills.
- **Hover:** the fill rises to 10% black, with Tailwind's default transition (150ms).
- **Behavior:** they open in a new tab (`target="_blank"`, `rel="noopener noreferrer"`).

### Technology Tags (Chips)

These are small, quiet labels that show the stack for each role.

- **Style:** mist fill, a 1px mist-border outline and slate text at Tag weight, with the technology's 14px logo in its original colours.
- **Shape:** a full pill. The padding is 4px by 8px with a 6px gap between logo and text.
- **State:** static and not interactive.

### Experience Timeline (Signature Component)

This is the spine of the page. It is an ordered list with a thin vertical line in slate-faint. Each entry contains, in order:

1. The date range (Label, slate-muted).
2. The role title (Title, ink).
3. The company and location (Label, slate-faint).
4. A summary and achievement bullets (Body, slate-muted, outside discs).
5. The technology tags.

The marker for past roles is a 12px circle in slate-strong with an ink-heading border. The **current role** adds a halo using `animate-ping` at 75% opacity, hidden under `prefers-reduced-motion`. It is the only movement on the page.

## Do's and Don'ts

### Do:

- **Do** keep the 800px column with its `max-w-[calc(100%-2rem)]` cap. Without it, mobile loses its gutters.
- **Do** build hierarchy with weight (400, 600 and 700) and the grey order ink, then slate-muted, then slate-faint.
- **Do** use the full pill (9999px) for any new link or label element.
- **Do** keep motion limited to the current-role marker and hide it under `prefers-reduced-motion`.
- **Do** introduce a single brand accent, and only one, when it is defined, and use it sparingly.

### Don't:

- **Don't** add shadows, cards or layered surfaces. The page is flat.
- **Don't** add a second typeface or use Inter (the Flowbite default).
- **Don't** add decorative colour before the accent is defined. Only technology logos carry colour.
- **Don't** use blue Flowbite components (such as the unused `Badge`) as if they belonged to the system.
- **Don't** use slate-faint for new text that has to be read. It is reserved for the company line and the timeline line, because its contrast against white is low.
