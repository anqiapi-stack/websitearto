---
name: ARTO PRIMA
description: Visual design system for PT. Artomoro Prima Internasional
colors:
  primary: "#FFC600"
  primary-hover: "#e6b200"
  primary-dark: "#cc9c00"
  neutral-dark: "#363434"
  neutral-light: "#f8f8f8"
  white: "#ffffff"
  border: "#e0e0e0"
typography:
  display:
    fontFamily: "Source Sans 3, sans-serif"
    fontSize: "clamp(2.5rem, 6vw, 4rem)"
    fontWeight: 700
    lineHeight: 1.1
  headline:
    fontFamily: "Source Sans 3, sans-serif"
    fontSize: "1.875rem"
    fontWeight: 700
    lineHeight: 1.2
  title:
    fontFamily: "Source Sans 3, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 700
    lineHeight: 1.3
  body:
    fontFamily: "Source Sans 3, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
  label:
    fontFamily: "Source Sans 3, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 600
    lineHeight: 1.25
rounded:
  button: "4px"
  card: "8px"
  image: "8px"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.neutral-dark}"
    rounded: "{rounded.button}"
    padding: "12px 24px"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  card:
    backgroundColor: "{colors.white}"
    rounded: "{rounded.card}"
    padding: "24px"
---

# Design System: ARTO PRIMA

## 1. Overview

**Creative North Star: "The Institutional Shield"**

The Institutional Shield represents PT. Artomoro Prima Internasional's commitment to defense-grade security, structural precision, and traditional corporate reliability. Our design philosophy prioritizes robust stability, legibility, and serious execution over temporary visual trends. It utilizes strong grid alignments, clear spacing rhythm, and high typographic contrast to evoke safety, sovereignty, and trust. 

The system rejects loose drawings, video game neon accents, and flat repetitive layouts, replacing them with structured depth and solid visual hierarchy. Every visual element exists to support institutional clarity, helping state-owned enterprises and government institutions easily evaluate our national defense and surveillance solutions.

**Key Characteristics:**
- Rigid layouts and clear containment structures.
- High typographic contrast and balanced line lengths.
- Strategic use of Sovereign Gold as a focused anchor against Deep Charcoal.
- Tactile depth using soft, realistic shadows.

## 2. Colors

The color palette anchors on high-trust corporate tones, matching national sovereignty with technical authority.

### Primary
- **Sovereign Gold** (#FFC600 / oklch(82.68% 0.187 88)): The primary brand accent, conveying leadership, excellence, and national pride. Used selectively for main buttons, primary section headings, and key focus states.

### Neutral
- **Deep Charcoal** (#363434 / oklch(30.6% 0.002 45)): The core structural neutral, used for body text, primary backgrounds in dark-mode sections (such as Mission), and dark outlines.
- **Off-White** (#f8f8f8 / oklch(97.7% 0.001 45)): The background fill for light-themed sections, creating a clean, professional surface.
- **White** (#ffffff / oklch(100% 0 0)): Used for card containers and navigation headers to stand out cleanly against Off-White.
- **Light Border** (#e0e0e0 / oklch(90.1% 0.001 45)): The standard outline color for borders and divider lines.

### Named Rules
**The Gold Anchor Rule.** Sovereign Gold (#FFC600) is reserved for highlighting primary interactive elements, key titles, and important accents. It must not exceed 10% of any screen surface to preserve its significance and authoritative voice.

## 3. Typography

**Display Font:** Source Sans 3 (with sans-serif fallback)  
**Body Font:** Source Sans 3 (with sans-serif fallback)  
**Label/Mono Font:** Source Sans 3 (with sans-serif fallback)  

**Character:** Standard clean sans-serif typography that communicates clarity, modern efficiency, and institutional accessibility. It uses varying weights and sizes to ensure structured reading hierarchies without competing font families.

### Hierarchy
- **Display** (Bold (700), clamp(2.5rem, 6vw, 4rem), 1.1): Used for main hero headers on the welcome page.
- **Headline** (Bold (700), 1.875rem, 1.2): Used for section headings.
- **Title** (Bold (700), 1.25rem, 1.3): Used for card headings and minor subsection titles.
- **Body** (Regular (400), 1rem, 1.6): Used for primary copy. Line length is capped at 75ch.
- **Label** (Semi-Bold (600), 0.875rem, 1.25): Used for button labels, form headers, and navigation links.

### Named Rules
**The Balanced Line Rule.** Keep body prose line lengths strictly capped at 65-75ch to maintain optimal readability for government and defense clients.

## 4. Elevation

The elevation system uses soft, realistic shadows combined with solid borders to create structured, tactile depth. Depth is used to communicate page layers and component states, reassuring the user of interactivity.

### Shadow Vocabulary
- **Card Hover Shadow** (`box-shadow: 0 4px 12px rgba(54, 52, 52, 0.08)`): Applied to card elements upon hover to lift them off the page surface.

### Named Rules
**The Tactile Response Rule.** Card elements and primary buttons must respond to user interactions with smooth, slight elevation lifts and border color shifts, providing physical reassurance of state change.

## 5. Components

### Buttons
- **Shape:** Standard button corners with a small radius (4px).
- **Primary:** Sovereign Gold background, Deep Charcoal text, 12px 24px padding (`padding: 0.75rem 1.5rem`).
- **Hover / Focus:** Hover changes background to primary-hover (#e6b200). Focus applies a solid 2px outline in Deep Charcoal.
- **Secondary:** Transparent background, Deep Charcoal text, 2px border in Deep Charcoal. Hover fills the background with Deep Charcoal and shifts text to White.

### Cards / Containers
- **Corner Style:** Rounded corners with an 8px radius (`border-radius: 0.5rem`).
- **Background:** White (#ffffff) background to stand out against Off-White pages.
- **Shadow Strategy:** Flat at rest with a 1px border. Lifts on hover using Card Hover Shadow.
- **Border:** 1px solid border in Light Border (#e0e0e0).
- **Internal Padding:** 24px (`padding: 1.5rem`) on mobile, scaling to 32px (`padding: 2rem`) on desktop.

### Navigation
- **Header Navigation:** Sticky layout with a thin Light Border underneath. Uses White background with 95% opacity and a backdrop blur of 4px. Links are Label style in Deep Charcoal, shifting to Sovereign Gold when active or on hover.
- **Mobile Menu:** Renders as a vertical list of flat blocks, hiding the desktop menu entirely.

## 6. Do's and Don'ts

### Do:
- **Do** cap body text line lengths at 75ch to ensure legibility and professional page balance.
- **Do** preserve the contrast of body text (Deep Charcoal on White or Off-White) at 4.5:1 or higher.
- **Do** keep card borders thin (1px) and corner radii at 8px to maintain a precise, structured aesthetic.

### Don't:
- **Don't** use side-stripe borders as colored accents on cards, lists, or alerts.
- **Don't** use gradient text or decorative text clips.
- **Don't** use neon defense HUD details or video-game elements.
- **Don't** use flat, uninspired templates that repeat identical-sized cards without visual variety.
- **Don't** use excessive card corner rounding (radii greater than 16px).
