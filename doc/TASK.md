# Development Task List

This document tracks the actionable tasks required to build the ADITECH Recruitment System MVP, aligned with the roadmap in `DOC.md`.

## Phase 1: Core Infrastructure & Setup
- [ ] **Project Initialization**
    - [ ] Verify `composer.json` dependencies (Laravel 12, Pest, etc.).
    - [ ] Configure `.env` (Database connection, App URL).
    - [ ] Set up `GEMINI.md` context (Completed).
- [ ] **Authentication & Roles**
    - [ ] Install/Configure Laravel Breeze.
    - [ ] Add `role` column to `users` table migration.
    - [ ] Create `User` model with `role` casting and helper methods (`isAdmin()`, `isCandidate()`).
    - [ ] Implement middleware for `admin` role protection.
- [ ] **Database Schema (Migrations)**
    - [ ] Create `jobs` table (fields: title, description, employment_type, location, salary, status, etc.).
    - [ ] Create `applications` table (fields: job_id, user_id, status, cover_letter).
    - [ ] Create `attachments` table (fields: application_id, file_path, file_metadata).
- [ ] **File Storage**
    - [ ] Configure `public` disk in `config/filesystems.php`.
    - [ ] Run `php artisan storage:link`.

## Phase 2: Job Management (HR Module)
- [ ] **Job Models & Factories**
    - [ ] Create `Job` model with relationships (`creator`, `applications`).
    - [ ] Create `JobFactory` for seeding dummy data.
- [ ] **Admin Dashboard (UI)**
    - [ ] Design Job Listing View (Table with columns: Title, Status, Applicants Count, Actions).
    - [ ] Design "Create Job" Form (Inputs: Title, Rich Text Description, Type, Salary, Status).
- [ ] **Backend Logic (Controllers)**
    - [ ] Implement `JobController` (Admin) - `index`, `create`, `store`, `edit`, `update`, `destroy`.
    - [ ] Implement validation requests (`StoreJobRequest`, `UpdateJobRequest`).
    - [ ] Add logic to handle `draft` vs `published` status.

## Phase 3: Career Portal (Candidate Module)
- [ ] **Public Job Listing**
    - [ ] Create `PublicJobController` - `index`, `show`.
    - [ ] Design `/careers` page (Grid layout, Search/Filter sidebar).
    - [ ] Design Job Detail page (Description, "Apply Now" CTA).
- [ ] **Application Process**
    - [ ] Design Application Form (Personal info pre-filled if logged in, File Upload).
    - [ ] Implement `ApplicationController` - `store`.
    - [ ] Handle file upload: Validate (PDF, 2MB), Store in `public/cvs`, Create `Attachment` record.
    - [ ] Send automated "Application Received" email to candidate.

## Phase 4: Screening & HR Operations
- [ ] **Application Management**
    - [ ] Add "View Applications" link to Admin Dashboard Job list.
    - [ ] Design Application List View (Table: Candidate Name, Date, Status, Link to CV).
    - [ ] Design Application Detail Modal/Page (Cover letter, Status Toggle, CV Download).
- [ ] **Status Workflow**
    - [ ] Implement state machine logic in `Application` model (or Service).
    - [ ] Create Controller method to update status (`updateStatus`).
    - [ ] Update UI to reflect current status and allow transitions (Dropdown/Buttons).

## Phase 5: UI/UX & Polish
- [ ] **Lucide Icons Integration**
    - [ ] Install/Configure icon set.
    - [ ] Replace placeholder SVGs with consistent Lucide icons.
- [ ] **Responsiveness Check**
    - [ ] Verify Mobile/Tablet views for Landing Page, Admin Dashboard, and Forms.
- [ ] **Final Review**
    - [ ] Run `php artisan test` (Pest).
    - [ ] Run `npm run build` for production assets.

---
**Legend:**
- [ ] Todo
- [x] Completed
- [~] In Progress
