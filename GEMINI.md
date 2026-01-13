# GEMINI.md

## Project Overview

**ADITECH Recruitment System** is a corporate web application built using the **Laravel 12.0** framework. It serves as a professional platform for ADITECH to manage its hiring process, attract top talent, and streamline employee recruitment.

### Brand Identity

-   **Company Name:** ADITECH
-   **Mission:** To empower businesses through digital excellence.
-   **Values:** Integrity, Innovation, and Inclusivity.
-   **Primary Color:** Official Blue (`#1e40af` / Tailwind `blue-800`).
-   **Typography:** **Poppins** (Sans-serif) for all headings and body text.
-   **Visual Style:** Clean, elegant, professional, and minimal. High focus on trust and corporate identity. Avoids excessive gradients or clutter.

### Tech Stack

-   **Backend:** PHP 8.2+, Laravel 12.0
-   **Frontend:** Vite 7.0+, TailwindCSS 4.0+
-   **Database:** MySQL / SQLite
-   **Icons:** Lucide Icons (SVG)
-   **Testing:** Pest 4.3+
-   **Code Quality:** Laravel Pint

## Architecture & Structure

The project follows a standard Laravel structure with a **feature-based** organization for views:

-   `app/`: Core application logic (Models, Controllers, Providers).
-   `public/assets/images/`: Storage for corporate visual assets.
-   `resources/views/features/`:
    -   `public/`: Landing pages and public job listings.
    -   `auth/`: Authentication views (Login, Register).
    -   `dashboard/`: Admin dashboard and management views.
-   `resources/views/components/`: Reusable UI components.
-   `routes/web.php`: Route definitions using Controller classes and named routes.

## Setup & Usage

### Initial Setup

```bash
composer setup
```

### Development Server

```bash
composer dev
```

### Building Assets

```bash
npm run build
```

## UI/UX Standards & Conventions

**When adding new views or components, maintain the ADITECH style:**

### Design Principles

-   **Dominant Hue:** Use `blue-800` for primary elements (buttons, logos, headers).
-   **Contrast:** Use `slate-50` or `white` backgrounds for sections to maintain high readability.
-   **Icons:** Use **Lucide Icons** (clean, consistent SVG strokes).
-   **Spacing:** Generous padding (`py-24` or `py-32`) between sections to provide a premium feel.
-   **Images:** Use professional photography from `public/assets/images/`.

### Font Integration

-   The **Poppins** font is imported in `resources/css/app.css`.
-   The Tailwind theme is configured to use Poppins as the primary `--font-sans`.

### Components Global

-   `resources/views/components`: Global and Shared Components
    -   `/layouts/admin-layout`: Admin Layouts
    -   `/layouts/public-layout`: Public Layouts

### How To Use Components

-   Global Components
-   `<x-[component_name]>`: Global and Shared Components
-   Featured or Local Components
-   `<x-feature::[name_feature].components.[component_name]>`: Global and Shared Components

## Development Conventions

### PHP / Laravel

-   **Type Hints:** Mandatory PHP 8.2+ type hints.
-   **Models:** Use `protected function casts(): array`.
-   **Routes:** Always use named routes and Controller classes.

### Testing Strategy

-   **Pest Framework:** Use the functional `expect()` and `$this->` syntax.
-   **Feature Tests:** Every new public route must have a corresponding feature test.

## Key Configuration Files

-   `composer.json`: Scripts for `setup`, `dev`, `test`.
-   `package.json`: Scripts for `build`, `dev`.
-   `resources/css/app.css`: Font imports and Tailwind v4 configuration.
