# QA Test Plan (MVP)

## Objective
Verify end-to-end integration of the MVP’s critical flows.

## Scope
- Authentication (registration, login, logout)
- Courses and sessions (view, admin CRUD)
- Booking (with and without sessionBook)
- Stripe payment and dashboard return flow
- Booking cancellation

## Environment
- Local Symfony application (branch `feature/malik` and `feature/christophe`)
- Project database
- Stripe (test mode)

## Test scenarios
| ID | Scenario | Type | Expected result |
|---|---|---|---|
| T-001 | Valid user registration | Manual | Account created + redirected to login |
| T-002 | User login | Manual | Access to dashboard |
| T-003 | Booking with sessionBook | Manual | Booking confirmed + session credit decremented |
| T-004 | Booking without sessionBook (Stripe) | Manual | Payment validated + booking created |
| T-005 | Booking cancellation | Manual | Status cancelled + seat/credit restored for sessionBook purchase |
| T-006 | Admin creates a course | Manual | Course visible in list |
| T-007 | Admin creates a valid session | Manual | Session created |
| T-008 | Admin tries to create invalid-duration session | Manual | Rejected with error message |
| T-009 | Admin dashboard stats card readability | Manual | Text readable on purple/blue background |
| T-010 | Run existing PHP tests | Automated | Execution without blocking errors |
| T-011 | Refund for single-session purchase (without sessionBook) | Manual | Refund complet and will verify on Stripe dashboard |

## Acceptance criteria
- No regressions on critical flows.
- 100% of Must Have items tested.
- All critical bugs fixed before release.
