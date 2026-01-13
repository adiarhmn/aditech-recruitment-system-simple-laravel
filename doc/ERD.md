# Entity Relationship Diagram (ERD)

This diagram outlines the database schema for the ADITECH Recruitment System, focusing on the MVP requirements.

```mermaid
erDiagram
    USERS {
        bigint id PK
        string name
        string email UK
        string password
        string role "ENUM('admin', 'candidate')"
        timestamp email_verified_at
        string remember_token
        timestamp created_at
        timestamp updated_at
    }

    JOB_POSTINGS {
        bigint id PK
        string title
        text description
        string employment_type "ENUM('full-time', 'part-time', 'contract', 'internship')"
        string location
        decimal salary_min
        decimal salary_max
        string status "ENUM('draft', 'published', 'closed')"
        timestamp published_at
        timestamp created_at
        timestamp updated_at
        bigint created_by FK "References USERS(id)"
    }

    APPLICATIONS {
        bigint id PK
        bigint job_id FK "References JOB_POSTINGS(id)"
        bigint candidate_id FK "References USERS(id)"
        string cover_letter
        string status "ENUM('applied', 'shortlisted', 'interview', 'hired', 'rejected')"
        timestamp created_at
        timestamp updated_at
    }

    ATTACHMENTS {
        bigint id PK
        bigint application_id FK "References APPLICATIONS(id)"
        string file_path
        string file_name
        string file_type "MIME type (e.g. application/pdf)"
        int file_size "In bytes"
        timestamp created_at
        timestamp updated_at
    }

    %% Relationships
    USERS ||--o{ JOB_POSTINGS : "creates (admin)"
    USERS ||--o{ APPLICATIONS : "submits (candidate)"
    JOB_POSTINGS ||--o{ APPLICATIONS : "receives"
    APPLICATIONS ||--o{ ATTACHMENTS : "has"
```

## Entity Descriptions

### 1. USERS
Stores authentication details for both system Administrators and Candidates.
- **role**: Differentiates between HR staff (`admin`) and applicants (`candidate`).
- **email**: Unique identifier for login.

### 2. JOB_POSTINGS
Represents job postings created by HR.
- **status**: Controls visibility (`draft` = hidden, `published` = visible on portal).
- **created_by**: Tracks which admin created the posting.
- **Note**: Named `job_postings` to avoid conflict with Laravel's queue `jobs` table.

### 3. APPLICATIONS
Links a specific Candidate (`USERS`) to a specific Job (`JOB_POSTINGS`).
- **status**: Tracks the workflow state (`applied` -> `shortlisted` -> `interview` -> `hired`/`rejected`).
- **cover_letter**: Optional text submission from the candidate.

### 4. ATTACHMENTS
Stores file metadata for uploaded CVs/Resumes associated with an application.
- **application_id**: Links the file to the specific application record.
- **file_path**: Relative path to the stored file in `storage/app/public`.
