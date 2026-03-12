**Final Report – Results and Lessons Learned (Actual Sport MVP)**

**1. Project Context**

- Project: Actual Sport
- Team: Malik BOUANANI & Christophe BARRERE
- Period: 01/12/2026 to 03/06/2026
- Overall objective: deliver a functional web MVP for course/session management, bookings, payments, and administration.

**2. Results Summary**

**2.1 Core MVP features delivered**

- User authentication: registration, login, logout.
- Admin management of courses and sessions: create, edit, delete.
- Admin user management: promote a user to admin and demote back to user.
- Session booking:
	- With a session package.
	- Without a package via Stripe payment.
- Booking cancellation:
	- Session package credit restoration when applicable.
	- Stripe refund for single-session purchases.
- User and admin dashboards: booking/payment tracking and improved readability.

**2.2 Comparison with initial objectives (Project Charter / MoSCoW)**

- Must Have: fully achieved across the defined scope.
- Should Have: mostly achieved.
	- Strict session duration = course duration validation: implemented.
	- Admin readability improvements: implemented.
	- Registration filters/sorting: implemented.
- Could Have: partially achieved.
	- Automated test coverage: present but still insufficient.
	- Detailed QA traceability: started, still needs reinforcement.
- Won't Have (planned): not implemented during this period.
	- Full CI/CD pipeline.
	- Real-time tracking tool usage (Jira/Trello used in a structured, ongoing way).

**2.3 Key metrics (KPIs)**

- QA scenarios planned: 11
- Manually validated scenarios: 10/11 (OK)
- Automated test scenario: 1/11 marked "needs improvement" (insufficient coverage)
- Bugs tracked during the period: 22
- Bugs closed: 22
- Resolution rate: 100%
- QA conclusion: critical MVP flows validated (auth, booking, Stripe, cancellation, admin CRUD).

**2.4 Delivered value**

- Complete end-to-end user journey.
- Strengthened critical business rules.
- Reduced functional inconsistencies thanks to Sprint 4 fixes.

---

**3. Lessons Learned**

**3.1 What went well and why**

- Short, fix-oriented iterations: enabled fast stabilization of critical flows.
- Shared fullstack work: ensured continuity between front-end, business logic, and manual tests.
- User-impact prioritization: improved perceived quality on key journeys.

**3.2 Challenges and how they were addressed**

- Technical challenges:
	- Reliability of the Stripe flow and payment callback.
	- Consistency of business rules for sessions/bookings.
	- Admin UI readability.
- Response:
	- Targeted sprint-based fixes.
	- Stronger business validation (durations, past sessions, cancellations).
	- Systematic manual re-testing of sensitive flows.
- Non-technical challenges:
	- Incomplete tracking formalization at project start.
	- Prioritization during high bug-density phases.
- Response:
	- Progressive structuring of the fix backlog.
	- Regular alignment on Must Have objectives.

**3.3 Improvement areas for future projects**

- Start a real automated testing strategy earlier (minimum critical scenarios).
- Set up continuous traceability for tests/incidents (statuses, evidence, dates).
- Clarify blocking business rules earlier to reduce regressions.
- Reserve a dedicated sprint buffer for hardening/QA before the final demo.
- Introduce a basic CI/CD pipeline (lint, tests, build) to secure merges.

---

**4. Team Retrospective Highlights**

**4.1 What worked well as a team**

- Strong technical complementarity.
- Effective front/back collaboration.
- Good adaptability to unexpected issues in Sprint 4.

**4.2 Observed friction points**

- Some tracking and documentation tasks were completed late.
- Automated coverage did not keep pace with functional changes.

**4.3 Concrete actions for the future**

- Define a "Definition of Done" from Sprint 1, including tests + QA evidence.
- Reserve a fixed weekly slot for quality review.
- Limit late changes without an associated validation plan.

---

**5. Conclusion and next steps**

- The MVP is functional and covers the essential needs of the initial scope.
- Critical user/admin flows are operational and manually validated.
- Future priorities:
	- Strengthen automated test coverage.
	- Improve quality traceability.
	- Progressively industrialize the delivery pipeline.