## **1. System Vision**

The ADITECH Recruitment System is a centralized web platform that enables HR teams to manage the entire hiring lifecycle efficiently, while providing candidates with a seamless and professional application experience. The system emphasizes **process transparency**, **structured candidate data management**, and a strong **corporate identity** reflecting ADITECH’s core values: *Integrity, Innovation, and Inclusivity*.

---

## **2. Technology Stack**

| Component        | Technology Used                         |
|------------------|------------------------------------------|
| **Backend**      | Laravel 12 (PHP 8.2+)                   |
| **Frontend**     | Tailwind CSS 4 + Vite 7                 |
| **Database**     | MySQL (with SQLite support for testing) |
| **Authentication**| Laravel Breeze (Role-based: Admin / Candidate) |
| **Testing**      | Pest PHP 4.3+                           |
| **Code Quality** | Laravel Pint                            |

> The system does **not** rely on third-party state management libraries. Basic interactivity is implemented using standard Laravel forms and lightweight AJAX where necessary.

---

## **3. Minimum Viable Product (MVP)**

The MVP focuses on core features to enable end-to-end recruitment operations:

- ✅ **Job Management**: HR can create, edit, and publish job postings.
- ✅ **Public Career Portal**: Candidates can browse open positions without authentication.
- ✅ **Application Form**: Collect personal details and accept CV uploads (PDF only, ≤2MB).
- ✅ **HR Dashboard**: View applicants grouped by job posting with basic filtering.
- ✅ **Application Status Workflow**: Update candidate status using a standardized state machine.

> All UI elements use the **Poppins** font and ADITECH’s official color palette (`blue-800` as primary).

---

## **4. User Workflows**

### **A. Candidate (External User)**
1. Visits the public careers page (`/careers`) — clean, branded landing experience.
2. Browses active job listings with filters (category, job type).
3. Views a job detail page → clicks “Apply Now”.
4. Completes the application form with file upload → submits.
5. Receives an on-screen confirmation and automated email: *“Thank you—your application has been received.”*

### **B. Admin / HR (Internal User)**
1. Logs into the admin dashboard (`/admin`).
2. Creates a new job posting → saves as draft or publishes immediately.
3. Reviews incoming applications → views candidate profiles and downloads CVs.
4. Updates applicant status via intuitive UI actions:
   - `Applied` → `Shortlisted` → `Interview` → `Hired` / `Rejected`
5. Receives system notifications for new applications.

---

## **5. Application Status State Machine**

Each `Application` record must follow this standardized workflow:

| Status        | Description                              | Accessible By |
|---------------|------------------------------------------|---------------|
| `APPLIED`     | New application received                 | HR            |
| `SHORTLISTED` | Passed initial document screening        | HR            |
| `INTERVIEW`   | Scheduled for interview                  | HR            |
| `HIRED`       | Job offer accepted                       | HR            |
| `REJECTED`    | Does not meet criteria (optional internal notes) | HR      |

> Status transitions are unidirectional and automatically timestamped.

---

## **6. Feature Development Roadmap**

### **Phase 1: Core Infrastructure**
- [ ] Set up Laravel 12 + Tailwind CSS 4 (`composer setup`)
- [ ] Implement role-based authentication (`admin` / `candidate`)
- [ ] Create database migrations: `users`, `jobs`, `applications`, `attachments`
- [ ] Configure file storage for CVs (`public/assets/cv/`)

### **Phase 2: Job Management (HR Module)**
- [ ] Full CRUD for job postings with `draft` vs `published` scopes
- [ ] HR dashboard with key metrics: active jobs, total applicants, avg. response time
- [ ] Rich-text validation for job descriptions

### **Phase 3: Career Portal (Candidate Module)**
- [ ] Responsive `/careers` page using Tailwind CSS 4 Grid
- [ ] Filtering by category and employment type (full-time, internship, etc.)
- [ ] Secure CV upload with validation (PDF only, ≤2MB)
- [ ] Automated email notifications via Laravel Mail

### **Phase 4: Screening & HR Operations**
- [ ] Applicant table with search by name/email (form-based or lightweight AJAX)
- [ ] One-click status updates via dropdown or action buttons
- [ ] Download individual or bulk CVs (ZIP archive)
- [ ] Optional: Audit log for status changes (post-MVP)

---

## **7. UI/UX Guidelines (Per GEMINI.md)**

- **Color Palette**: Primary brand color `blue-800` (#1e40af); section backgrounds in `slate-50` or white for readability.
- **Typography**: **Poppins** for all text (headings and body), configured via `--font-sans` in Tailwind.
- **Spacing**: Generous vertical padding (`py-24` to `py-32`) between sections for a premium, uncluttered feel.
- **UI Components**: 
  - Reusable Blade components in `resources/views/components` (Button, Card, StatusBadge, etc.).
  - **Icons**: Use **Lucide Icons** — clean, minimal SVG icons rendered inline or via a custom Blade helper.
- **Assets**: All corporate images sourced from `public/assets/images/`.

> Ensure Lucide Icons are integrated consistently across the application (e.g., `FileText` for CVs, `Calendar` for scheduling, `UserCheck` for hired status).

---

## **8. Development Conventions**

- **Routing**: All routes must be named (e.g., `route('admin.applications.index')`).
- **Authorization**: Use Laravel Gates/Policies for role-based access control.
- **Testing**: Every public-facing feature requires at least one Pest feature test.
- **Code Style**: 
  - Mandatory PHP 8.2+ type hints.
  - Use `casts()` array in Eloquent models.
  - Keep business logic out of views.

---

> This is a living document—subject to updates based on user feedback and feature evolution.  
> **Next Step**: Finalize HR dashboard wireframes and integrate Lucide Icons into core UI components.

---

Let me know if you'd like:
- A Lucide Icons integration guide for Laravel Blade  
- Recommended Lucide icon mappings per feature  
- Sample Blade component structure aligned with your folder architecture  

