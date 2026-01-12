# ADITECH Recruitment System

![ADITECH Banner](https://img.shields.io/badge/ADITECH-Recruitment_System-1e40af?style=for-the-badge&logo=laravel&logoColor=white)

<div align="center">

[![Laravel 12](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS 4](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![PHP 8.2+](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Vite](https://img.shields.io/badge/Vite-7.0-646CFF?style=flat-square&logo=vite&logoColor=white)](https://vitejs.dev)

**A professional, corporate-grade Applicant Tracking System (ATS) designed for ADITECH.**
*Streamlining the hiring lifecycle with elegance, security, and efficiency.*

</div>

---

## 📖 Project Overview

The **ADITECH Recruitment System** is a modern web platform built to transform how ADITECH manages talent acquisition. By replacing fragmented manual processes with a centralized, automated workflow, the system enhances the experience for both HR administrators and job candidates.

Built on **Laravel 12** and **Tailwind CSS 4**, the application prioritizes performance, security, and a premium user interface. The design strictly adheres to ADITECH's corporate identity—featuring the signature **Blue-800** palette, **Poppins** typography, and a clean, minimalist aesthetic that conveys trust and professionalism.

## ✨ Key Features

### 🏢 For HR Administrators
*   **Command Center Dashboard**: Real-time overview of active jobs, applicant stats, and upcoming interviews.
*   **Job Management**: Create, edit, and publish job postings with rich details and requirements.
*   **Applicant Tracking**: A structured pipeline to move candidates from `Applied` → `Shortlisted` → `Interview` → `Hired`.
*   **CV Review**: Integrated PDF viewer and download capability for candidate resumes.

### 👩‍💻 For Candidates
*   **Public Career Portal**: A responsive, branded landing page to browse open positions.
*   **Seamless Application**: Easy-to-use form with profile creation and secure CV upload.
*   **Application History**: Track the status of submitted applications in real-time.

## 🛠️ Tech Stack

This project is architected for scalability and maintainability:

| Component | Technology | Description |
| :--- | :--- | :--- |
| **Framework** | **Laravel 12** | Robust backend logic, routing, and security. |
| **Styling** | **Tailwind CSS 4** | Utility-first CSS for a custom, responsive design. |
| **Frontend** | **Blade + Vite** | High-performance asset bundling and templating. |
| **Database** | **MySQL** | Reliable relational data storage. |
| **Icons** | **Lucide Icons** | Consistent, crisp SVG iconography. |
| **Testing** | **Pest PHP** | Elegant testing framework for stability. |

## 🎨 Design & Architecture

### Corporate Identity
*   **Primary Color**: `#1e40af` (Tailwind `blue-800`) - Used for primary actions, navigation, and branding.
*   **Typography**: **Poppins** (Sans-serif) - Ensures modern readability across all devices.
*   **Visuals**: High-quality corporate imagery and generous whitespace (`py-24`) for a premium feel.

### Clean Architecture
The project adopts a **feature-based directory structure** in `resources/views/features` to improve maintainability:
*   `features/public`: Landing pages and job listings.
*   `features/auth`: Login and Registration flows.
*   `features/dashboard`: Admin management interfaces.

## 🚀 Installation Guide

Follow these steps to set up the project locally:

### Prerequisites
*   PHP 8.2 or higher
*   Composer
*   Node.js & NPM

### Setup Steps

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/aditech/recruitment-system.git
    cd recruitment-system
    ```

2.  **Install Backend Dependencies**
    ```bash
    composer setup
    ```
    *This custom script installs dependencies, copies `.env`, generates the app key, and runs migrations.*

3.  **Install Frontend Dependencies**
    ```bash
    npm install
    npm run build
    ```

4.  **Start Development Server**
    ```bash
    composer dev
    ```
    *Starts Laravel server, Queue worker, and Vite hot-reload server simultaneously.*

5.  **Access the Application**
    *   **Landing Page**: `http://localhost:8000`
    *   **Admin Dashboard**: `http://localhost:8000/admin/dashboard`

## 📂 Folder Structure Highlights

```text
app/
├── Http/Controllers/   # Application logic
├── Models/             # Eloquent models (User, JobPosting, Application)
resources/
├── css/                # Tailwind configuration & fonts
├── views/
│   ├── components/     # Reusable UI elements (Buttons, Cards)
│   └── features/       # Feature-scoped views
│       ├── auth/       # Login/Register templates
│       ├── dashboard/  # Admin interfaces
│       └── public/     # Candidate-facing pages
routes/
└── web.php             # Route definitions
```

## 🤝 Contribution

We welcome contributions to improve the ADITECH Recruitment System!
1.  Fork the repository.
2.  Create a feature branch (`git checkout -b feature/amazing-feature`).
3.  Commit your changes (`git commit -m 'Add amazing feature'`).
4.  Push to the branch (`git push origin feature/amazing-feature`).
5.  Open a Pull Request.

---

<p align="center">
  <small>© 2026 ADITECH. Built with precision and passion.</small>
</p>