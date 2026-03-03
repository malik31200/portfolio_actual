# Bug Log (reconstructed from Git)

## Method
This log was reconstructed from commits labeled as `fix`.

## Registry
| ID | Date | Symptom | Fix | Commit | Status |
|---|---|---|---|---|---|
| BUG-001 | 2026-02-17 | Docker/composer/GD environment issues | Fixed Dockerfile and permissions | `47237f1` | Closed |
| BUG-002 | 2026-02-24 | Unstable/incorrect login | Adjusted login logic | `c8ea4b7` | Closed |
| BUG-003 | 2026-02-24 | Missing price label in form | Added price label | `559c47f` | Closed |
| BUG-004 | 2026-02-24 | Incomplete course/session creation | Fixed create workflow | `df6ca1c` | Closed |
| BUG-005 | 2026-02-24 | Query builder `from` error | Added second argument | `51abf40` | Closed |
| BUG-006 | 2026-02-24 | Booking failed without sessionBook | Fixed booking controller | `47b1850` | Closed |
| BUG-007 | 2026-02-24 | Unreliable Stripe payment for sessions | Fixed Stripe payment flow | `9c44211` | Closed |
| BUG-008 | 2026-02-24 | Logo not displayed | Moved logo to the correct public folder | `1e6c035` | Closed |
| BUG-009 | 2026-02-25 | Inactive courses visible in admin/web | Added repository `isActive` filter | `9b4d454` | Closed |
| BUG-010 | 2026-02-25 | Incomplete dashboard payments (sessionBook) | Adjusted payment display | `41c770e` | Closed |
| BUG-011 | 2026-02-25 | Inconsistent sorting/text on home + filters | Fixed syntax + ASC/DESC sorting | `7b5c198` | Closed |
| BUG-012 | 2026-02-25 | Inappropriate duration step setting | Adjusted duration step | `48c1ff0` | Closed |
| BUG-013 | 2026-02-25 | Incorrect label "crée" | Corrected text to "créé" | `1c5bbeb` | Closed |
| BUG-014 | 2026-02-26 | 30-min session accepted for 60-min course | Enforced session duration = course duration | `eba64c7` | Closed |
| BUG-015 | 2026-02-26 | Hard-to-read text on purple admin cards | Adjusted text color | `8a4c185` | Closed |
| BUG-016 | 2026-02-27 | Deleted overview section because too repetitive | Removed a section from the admin page | `963dc83` | Closed |
| BUG-017 | 2026-02-27 | Fix: title and auth-footer | Moved title, form, and footer inside `auth-card` instead of `auth.container` | `8542231` | Closed |
| BUG-018 | 2026-02-27 | Auth footer syntax changed to auth-footer | Fixed misspelled class in `template/security/login.html.twig` | `f540704` | Closed |
| BUG-019 | 2026-02-27 | class"user-info-row" to class="user-info-row" | Added `=` so the class is applied in CSS | `3f16cb7` | Closed |
| BUG-020 | 2026-03-02 | In admin/sessions, past sessions still appeared | Past sessions were displayed and could still be modified | `3fbe6df` | Closed |
| BUG-021 | 2026-03-02 | change text of h2 and p in courses section| text no adapt | `963dc83` | Closed |

## KPI (observed period)
- Tracked bugs: 21
- Closed bugs: 21
- Resolution rate: 100%
