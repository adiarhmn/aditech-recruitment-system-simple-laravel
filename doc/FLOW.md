# ADITECH Recruitment System - System Flow

This document outlines the complete system flow for the ADITECH Recruitment System, describing the interactions between different user roles, data models, and application states.

---

## 1. System Overview

The recruitment system is built around two primary user roles:
- **Candidate**: External users who browse and apply for jobs
- **Admin/HR**: Internal users who manage job postings and review applications

---

## 2. Candidate Flow

### 2.1 Public Job Discovery Flow

```mermaid
flowchart TD
    A[Visitor Lands on Website] --> B[Navigate to /careers]
    B --> C{Logged In?}
    C -->|No| D[View Job Listings]
    C -->|Yes| E[View Job Listings + Applied Status]
    D --> F[Apply Filters]
    E --> F
    F --> G{Interested in Job?}
    G -->|No| F
    G -->|Yes| H[Click Job Card]
    H --> I[View Job Detail Page]
    I --> J{Want to Apply?}
    J -->|No| F
    J -->|Yes| K[Click Apply Now Button]
    K --> L{Logged In?}
    L -->|No| M[Redirect to Login/Register]
    M --> N[After Auth]
    L -->|Yes| N
    N --> O[Load Application Form]
    O --> P[Fill Personal Info]
    P --> Q[Upload CV PDF]
    Q --> R[Add Cover Letter]
    R --> S[Submit Application]
    S --> T{Validation Pass?}
    T -->|No| O
    T -->|Yes| U[Create Application Record]
    U --> V[Store Attachment]
    V --> W[Send Confirmation Email]
    W --> X[Display Success Message]
```

### 2.2 Application Submission Process

1. **Form Validation**: System validates:
   - CV file type (PDF only)
   - CV file size (≤ 2MB)
   - Required fields completeness

2. **Data Storage**:
   - Create `APPLICATIONS` record with status `APPLIED`
   - Store CV file in `public/cvs/` directory
   - Create `ATTACHMENTS` record with file metadata

3. **Notification**:
   - On-screen success message
   - Automated email sent to candidate's email address

---

## 3. HR/Admin Flow

### 3.1 Job Management Flow

```mermaid
flowchart TD
    A[Admin Logs In] --> B[Navigate to Dashboard]
    B --> C{Job Management Action}
    C -->|Create New| D[Click Create Job]
    C -->|Edit Existing| E[Select Job from List]
    C -->|Delete| F[Select Job + Delete]
    
    D --> G[Fill Job Form]
    G --> H{Save as Draft?}
    H -->|Yes| I[Save with DRAFT status]
    H -->|No| J[Save with PUBLISHED status]
    I --> K[Return to Dashboard]
    J --> K
    
    E --> L[Load Job Details]
    L --> M[Edit Fields]
    M --> N[Update Job]
    N --> K
    
    F --> O{Confirm Delete?}
    O -->|No| K
    O -->|Yes| P[Delete Job + Cascading Applications]
    P --> K
    
    K --> Q{More Actions?}
    Q -->|Yes| C
    Q -->|No| R[End Session]
```

### 3.2 Application Review Flow

```mermaid
flowchart TD
    A[Admin Views Dashboard] --> B[Select Job Posting]
    B --> C[View Applications List]
    C --> D{Select Application}
    D --> E[View Candidate Profile]
    E --> F[Download CV]
    F --> G[Review Cover Letter]
    G --> H{Decision Made?}
    H -->|No| C
    H -->|Yes| I[Update Status]
    
    I --> J{New Status}
    J -->|SHORTLISTED| K[Mark as Shortlisted]
    J -->|INTERVIEW| L[Schedule Interview]
    J -->|HIRED| M[Mark as Hired]
    J -->|REJECTED| N[Mark as Rejected]
    
    K --> O[Notify HR Team]
    L --> O
    M --> P[Send Offer Email]
    N --> Q[Send Rejection Email]
    
    O --> R{Continue Review?}
    P --> R
    Q --> R
    R -->|Yes| C
    R -->|No| S[Return to Dashboard]
```

### 3.3 Application Status State Machine

```mermaid
stateDiagram-v2
    [*] --> APPLIED: Application Submitted
    APPLIED --> SHORTLISTED: HR Review Pass
    APPLIED --> REJECTED: HR Review Fail
    SHORTLISTED --> INTERVIEW: Schedule Interview
    INTERVIEW --> HIRED: Offer Accepted
    INTERVIEW --> REJECTED: Offer Declined/Failed
    HIRED --> [*]: Process Complete
    REJECTED --> [*]: Process Complete
    
    note right of APPLIED
        Initial state
        Email sent to candidate
    end note
    
    note right of SHORTLISTED
        Candidate passed screening
    end note
    
    note right of INTERVIEW
        Interview scheduled
    end note
```

---

## 4. Data Flow

### 4.1 Job Posting Lifecycle

```
┌─────────────────────────────────────────────────────────────┐
│                    JOB LIFECYCLE                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│  [DRAFT] ────> [PUBLISHED] ────> [CLOSED]                   │
│     │               │                                        │
│     │               │                                        │
│     └───> [DELETED] │                                        │
│                     │                                        │
│                     └───> [DELETED]                         │
│                                                             │
└─────────────────────────────────────────────────────────────┘
```

**State Transitions**:
- **DRAFT**: Only visible to admins, can be edited
- **PUBLISHED**: Visible to all candidates on `/careers`, applications can be submitted
- **CLOSED**: No longer accepting applications, visible but cannot apply
- **DELETED**: Permanently removed from database (cascades delete applications)

### 4.2 Application Data Model Flow

```
User (Candidate)          Job Posting
     │                        │
     └───────────┬────────────┘
                 │
                 ▼
          Application
                 │
                 ▼
          Attachments (CV)
```

**Relationships**:
- `User` has many `Applications`
- `Job` has many `Applications`
- `Application` has many `Attachments`
- `User` creates many `Jobs` (admin role only)

### 4.3 Authentication & Authorization Flow

```mermaid
flowchart LR
    A[User Attempts Access] --> B{Route Protected?}
    B -->|No| C[Allow Access]
    B -->|Yes| D{Authenticated?}
    D -->|No| E[Redirect to Login]
    D -->|Yes| F{Has Required Role?}
    F -->|No| G[403 Forbidden]
    F -->|Yes| H[Allow Access]
    
    E --> I[User Logs In]
    I --> J{Admin or Candidate?}
    J -->|Admin| K[Redirect to Dashboard]
    J -->|Candidate| L[Redirect to Careers]
```

**Role-Based Access**:
- `admin`: Can access `/dashboard`, create/edit jobs, review applications
- `candidate`: Can browse `/careers`, apply for jobs, view own application status

---

## 5. Error Handling & Edge Cases

### 5.1 File Upload Failures
- Invalid file type → Show error: "Please upload PDF only"
- File size exceeded → Show error: "File must be under 2MB"
- Storage full → Log error, show user-friendly message

### 5.2 Application Edge Cases
- Duplicate application → Prevent re-application for same job
- Job closed when applying → Redirect to job listings with message
- User deleted → Soft delete, preserve application records

### 5.3 Status Transition Restrictions
- Cannot move from `HIRED` back to previous states
- Cannot move from `REJECTED` back to previous states
- All other transitions are valid (with admin confirmation)

---

## 6. Integration Points

### 6.1 Email Notifications
- **Application Received**: Sent to candidate immediately after submission
- **Status Update**: Optional notification to candidate when status changes
- **Offer Sent**: Sent when status changed to `HIRED`

### 6.2 File Storage
- **CV Uploads**: Stored in `storage/app/public/cvs/`
- **Storage Link**: Symbolic link created via `php artisan storage:link`
- **Public Access**: CVs accessible via `/storage/cvs/{filename}` (protected by auth check)

---

## 7. Key System Metrics

### Dashboard Metrics (Admin View)
- Total Active Jobs (`status = published`)
- Total Applications (by status)
- Average Time-to-Hire
- Applications per Job

---

## 8. Security Considerations

1. **Authentication**: Laravel Breeze with role-based middleware
2. **File Upload**: Validated file types and sizes
3. **Authorization**: Gates/Policies for resource access control
4. **CSRF Protection**: Enabled on all form submissions
5. **SQL Injection**: Protected via Eloquent ORM parameter binding

---

This flow document serves as the blueprint for implementing the ADITECH Recruitment System's business logic and user interactions.
