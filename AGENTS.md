# AGENTS.md

## Project Overview

**ADITECH Recruitment System** is a corporate web application built using the **Laravel 12.0** framework. It serves as a professional platform for ADITECH to manage its hiring process, attract top talent, and streamline employee recruitment.

### Brand Identity

*   **Company Name:** ADITECH
*   **Mission:** To empower businesses through digital excellence.
*   **Values:** Integrity, Innovation, and Inclusivity.
*   **Primary Color:** Official Blue (`#1e40af` / Tailwind `blue-800`).
*   **Typography:** **Poppins** (Sans-serif) for all headings and body text.
*   **Visual Style:** Clean, elegant, professional, and minimal. High focus on trust and corporate identity. Avoids excessive gradients or clutter.

### Tech Stack

*   **Backend:** PHP 8.2+, Laravel 12.0
*   **Frontend:** Vite 7.0+, TailwindCSS 4.0+
*   **Database:** MySQL / SQLite
*   **Testing:** Pest 4.3+
*   **Code Quality:** Laravel Pint

## Architecture & Structure

The project follows the standard Laravel directory structure:

*   `app/`: Core application logic (Models, Controllers, Providers).
*   `public/assets/images/`: Storage for corporate visual assets used in landing pages and marketing.
*   `resources/views/`: Blade templates (e.g., `welcome.blade.php` for the landing page).
*   `routes/web.php`: Defined routes including landing page anchors and auth placeholders.

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
*   **Dominant Hue:** Use `blue-800` for primary elements (buttons, logos, headers).
*   **Contrast:** Use `slate-50` or `white` backgrounds for sections to maintain high readability.
*   **Icons:** Use thin or medium stroke SVG icons (e.g., Heroicons) for a modern look.
*   **Spacing:** Generous padding (`py-24` or `py-32`) between sections to provide a premium feel.
*   **Images:** Use professional photography from `public/assets/images/`.

### Font Integration
*   The **Poppins** font is imported in `resources/css/app.css`.
*   The Tailwind theme is configured to use Poppins as the primary `--font-sans`.

## Development Conventions

### PHP / Laravel
*   **Type Hints:** Mandatory PHP 8.2+ type hints.
*   **Models:** Use `protected function casts(): array`.
*   **Routes:** Always use named routes.

### Testing Strategy
*   **Pest Framework:** Use the functional `expect()` and `$this->` syntax.
*   **Feature Tests:** Every new public route must have a corresponding feature test.

## Key Configuration Files
*   `composer.json`: Scripts for `setup`, `dev`, `test`.
*   `package.json`: Scripts for `build`, `dev`.
*   `resources/css/app.css`: Font imports and Tailwind v4 configuration.