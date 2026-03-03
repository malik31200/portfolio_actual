# QA Test Results (MVP)

## Available evidence
- PHPUnit tests configured: `phpunit.dist.xml`
- Test files present:
  - `tests/Controller/Web/AdminControllerTest.php`
  - `tests/Controller/Web/BookingControllerTest.php`
- Application logs: `var/log/dev.log`

## Results (summary)
| ID | Execution | Status | Comment |
|---|---|---|---|
| T-001 | Manual | OK | Registration flow validated |
| T-002 | Manual | OK | Login validated |
| T-003 | Manual | OK | Session book booking works |
| T-004 | Manual | OK | Stripe flow fixed and validated |
| T-005 | Manual | OK | Cancellation + credit restore validated for sessionBook |
| T-006 | Manual | OK | Course creation validated |
| T-007 | Manual | OK | Valid session creation |
| T-008 | Manual | OK | Invalid durations correctly blocked |
| T-009 | Manual | OK | Admin readability fixed |
| T-010 | Automated | Needs improvement | Coverage should be improved (existing tests are minimal) |
| T-011 | Manual | OK | Refund completed |

## QA Conclusion
- MVP critical flows: validated.
- Areas for improvement: automated test coverage and continuous execution traceability.
