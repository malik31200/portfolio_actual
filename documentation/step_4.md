# Stage 4: MVP Development

## Table of Contents

- [0. Plan and Define Sprints](#0-plan-and-define-sprints)
    - [Objective](#objective)
    - [Methodology](#methodology)
    - [Agile Ceremonies](#agile-ceremonies)
    - [Sprint Duration](#sprint-duration)
- [Sprint 1 — Functional Foundation (Core MVP)](#sprint-1--functional-foundation-core-mvp)
- [Sprint 2 — Core Booking Features](#sprint-2--core-booking-features)
- [Sprint 3 — Stripe Payment Integration](#sprint-3--stripe-payment-integration)
- [Sprint 4 — Advanced Admin, Security, Stabilization](#sprint-4--advanced-admin-security-stabilization)
- [Role Allocation (Example)](#role-allocation-example)
- [1. Execute Development Tasks](#1-execute-development-tasks)
- [2. Monitor Progress and Adjust](#2-monitor-progress-and-adjust)
- [3. Conduct Sprint Reviews and Retrospectives](#3-conduct-sprint-reviews-and-retrospectives)
- [4. Final Integration and QA Testing](#4-final-integration-and-qa-testing)
- [5. Deliverables](#5-deliverables)

## 0. Plan and Define Sprints

### Objective

Structure the platform development (courses, sessions, bookings, Stripe, admin area) into short cycles to deliver value at the end of each sprint.

### Methodology

- 2-week sprint cycles
- MoSCoW prioritization
- End-of-sprint validation (review + QA)

### Agile Ceremonies

- Quick daily stand-up (15 min)
- Sprint planning at sprint start
- Sprint review at sprint end
- Continuous improvement retrospective

### Sprint Duration

- **Sprint 1: 2 weeks**
- **Sprint 2: 2 weeks**
- **Sprint 3: 2 weeks**
- **Sprint 4: 2 weeks**

## Sprint 1 — Functional Foundation (Core MVP)

| Task | Related User Story | Priority | Owner | Dependencies | Due |
| --- | --- | --- | --- | --- | --- |
| Authentication (sign-up/login/logout) | As a user, I want to create an account and log in | Must | Backend | `User` entity, Symfony security | End S1 |
| Display active courses | As a user, I want to see available courses | Must | Backend + Frontend | `Course` entity, web templates | End S1 |
| List scheduled sessions | As a user, I want to see upcoming sessions | Must | Backend + Frontend | `Session` entity, repository filters | End S1 |
| Admin CRUD for courses | As an admin, I want to manage courses | Must | Backend | Admin back-office, protected routes | End S1 |
| Admin CRUD for sessions (valid duration) | As an admin, I want to plan valid sessions | Must | Backend | `Course` → `Session` relationship | End S1 |
| Manual validation of critical user paths | As a team, we want to avoid critical regressions | Should | QA | Features above | End S1 |

## Sprint 2 — Core Booking Features

| Task | Related User Story | Priority | Owner | Dependencies | Due |
| --- | --- | --- | --- | --- | --- |
| Booking using a package (`SessionBook`) | As a user, I want to book with my package | Should | Backend | `Registration`, `SessionBook` entities | End S2 |
| Booking cancellation + seat/credit restore | As a user, I want to cancel properly | Must | Backend | Booking status, session capacity | End S2 |
| User dashboard (bookings/packages/payments) | As a user, I want to track my activity | Should | Frontend + Backend | Consolidated data | End S2 |
| Admin booking management | As an admin, I want to filter/cancel bookings | Must | Backend + Frontend | Filter repositories | End S2 |

## Sprint 3 — Stripe Payment Integration

| Task | Related User Story | Priority | Owner | Dependencies | Due |
| --- | --- | --- | --- | --- | --- |
| Stripe checkout without package | As a user, I want to pay for one session | Must | Backend | Stripe keys, checkout flow | End S3 |
| Payment success callback + booking creation | As a user, I want to see my session after payment | Must | Backend | Stripe payment validation | End S3 |
| Duplicate payment/booking prevention | As a team, we want to avoid inconsistencies | Must | Backend | `stripePaymentId`, idempotency controls | End S3 |
| E2E tests for payment flow | As a team, we want production reliability | Should | QA | Full Stripe flow | End S3 |

## Sprint 4 — Advanced Admin, Security, Stabilization

| Task | Related User Story | Priority | Owner | Dependencies | Due |
| --- | --- | --- | --- | --- | --- |
| User role management (admin/user toggle) | As an admin, I want to manage roles | Must | Backend | Self-modification protection, admin UI | End S4 |
| Safe deletion hardening (linked course/session) | As an admin, I want to avoid invalid deletions | Should | Backend | DB dependency checks | End S4 |
| Test cleanup/alignment | As a team, we want a maintainable codebase | Should | QA + Backend | Real routes, test namespaces | End S4 |
| Deployment preparation and final checklist | As a team, we want a clean delivery | Must | DevOps + Team | Global functional validation | End S4 |

## Role Allocation (Example)

- **Backend (Christophe / Malik):** business logic, security, Stripe, admin features.
- **Frontend (Christophe / Malik):** Twig templates/UI for web and admin pages.
- **QA:** test scenarios, non-regression checks, release validation.
- **DevOps:** environment, secrets management, deployment.

## 1. Execute Development Tasks

### Instructions

1. **Development (Malik + Christophe)**
     - Implement planned sprint tasks (backend + Twig).
     - Follow coding conventions, existing architecture, and minimal change documentation.
     - Work in small, verifiable increments (feature by feature).
2. **SCM / Code Management (Malik + Christophe)**
     - Use a clear Git strategy:
         - one `feature/...` branch per contributor,
         - merge into `dev` after validation.
     - Perform cross-review before merge (minimum one reviewer).
     - Ensure commit messages clearly describe changes.
3. **Quality and Testing (shared QA)**
     - Test each completed feature (happy path + error cases).
     - Report issues, fix them, and revalidate.

### Project Example

For a sprint focused on **Booking + Payment**:

- **Development (Malik + Christophe):** implement booking (with/without package), Stripe flow, and dashboard Twig views.
- **SCM (Malik + Christophe):** mutual review, validation, then merge into `dev`.

```bash
git checkout feature/malik
# Malik implements code
git push origin feature/malik
# Christophe reviews on GitHub
# If approved:
git checkout dev
git merge feature/malik
```

- **QA (Malik + Christophe):** validate the full user journey (book, pay, return to dashboard, cancel), then apply fixes if needed.

## 2. Monitor Progress and Adjust

### Objective

Track team performance, measure progress, and handle blockers quickly.

- **Daily stand-up (5 min each morning):**
    1. what was done yesterday,
    2. what is planned today,
    3. blockers.
- **Project board update after stand-up (Trello):** move tickets (`To Do` → `In Progress` → `Review` → `Done`) and update spent time + dependencies.
- **In-sprint steering:** reassign delayed tasks, reduce non-critical scope (Could Have), and protect Must Have items.

### Metrics to Track

- **Sprint velocity** = number of completed tasks per sprint.
- **Completed vs planned (%)** = (completed tasks ÷ planned tasks) × 100.
- **Bugs:** opened count, resolved count, **resolution rate** = resolved ÷ opened × 100.
- **Blockers:** count + average resolution time.

## 3. Conduct Sprint Reviews and Retrospectives

### Objective

Evaluate end-of-sprint outcomes, demonstrate delivered features, and continuously improve team organization.

### Instructions

- **Sprint Review (end of sprint)**
    - Present completed features to team and stakeholders (two review meetings were held on January 20 and February 03, 2026).
    - Demonstrate key features (admin, booking, Stripe, dashboard).
    - Validate what is “Done” and record postponed items.
- **Sprint Retrospective (after review)**
    - Identify successes, difficulties, and improvement actions.
    - Define 2 to 3 concrete actions for the next sprint.
    - Assign one owner per improvement action.

### Retrospective Guiding Questions

- What worked well during this sprint?
- What difficulties did we face?
- What should we change concretely in the next sprint?

### Simple Report Template

| Section | Content |
| --- | --- |
| Delivered features | List of completed and demonstrated features |
| What worked well | 2–3 strong points |
| What worked less well | 2–3 blockers/issues |
| Improvement actions | Specific actions + owner + due date |

## 4. Final Integration and QA Testing

### Objective

Ensure all MVP components work smoothly together and comply with quality standards.

### Instructions

- **End-to-end integration tests**
    - Validate complete flows: sign-up, login, booking (with/without package), Stripe payment, dashboard, cancellation.
    - Verify data consistency across UI, backend logic, and database.
- **Final QA plan execution**
    - **Manual tests:** real user scenarios + error cases.
    - **Automated tests:** run existing test suites (and add minimal tests if required for critical paths).
- **Critical bug fixing**
    - Prioritize blocking issues (payment, booking, admin roles, security).
    - Re-run non-regression tests after each fix.

### Project Example

- Verify Twig pages correctly consume backend data (courses, sessions, bookings, payments).
- Verify DB operations are correct in all cases:
    - booking creation,
    - cancellation + seat/credit restore,
    - Stripe payment creation,
    - no duplicate booking/payment records.

### Expected Deliverable

- MVP validation report including:
    - tested scenarios,
    - results (PASS/FAIL),
    - found/fixed bugs,
    - final status: “ready to deliver”.

## 5. Deliverables

| Item | Link |
| --- | --- |
| Source repository | [https://github.com/malik31200/portfolio_actual](https://github.com/malik31200/portfolio_actual) |
| Bug tracking | [bug-log.md](../docs/bugs/bug-log.md) |
| Testing evidence and results | `AdminControllerTest.php`, `BookingControllerTest.php`, `phpunit.dist.xml`, `test-plan.md`, `test-results.md`, `dev.log` |
| Sprint planning | `planning.md` |
| Sprint reviews | `reviews.md` |
| Retrospectives | `retrospectives.md` |
| Production environment | `docker-compose.yml`, `Dockerfile` (local containerized environment; no public production URL specified) |
