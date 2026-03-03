# Sprint Planning (reconstructed from Git)

This document was reconstructed from the project's Git history.

## Context
- Project: `portfolio_actual`
- Team: Malik, Christophe
- Scope split: Backend + Twig together, CSS mainly by Malik
- Period: 12/01/2026 → 06/03/2026

## Sprint breakdown

### Sprint 1 (12/01 → 23/01)
Objective: set up the foundation (auth, web/admin structure).

### Sprint 2 (26/01 → 06/02)
Objective: stabilize core business flows (courses/sessions/registrations).

### Sprint 3 (09/02 → 20/02)
Objective: environment and delivery baseline (Docker infrastructure).

### Sprint 4 (23/02 → 06/03)
Objective: intensive bug-fixing phase (Stripe, dashboard, admin UX, business validations).

## Prioritized backlog (MoSCoW)

### Must Have
- User authentication (registration/login)
- Admin course/session management
- Session booking
- Stripe payment without a session book
- User/admin dashboard display

### Should Have
- Validate session duration = course duration
- Improve admin UI readability
- Filters and sorting on registrations

### Could Have
- Broader test coverage
- More detailed QA reporting

### Won't Have (during this period)
- Full tracking tooling (real-time Trello/Jira)
- Full CI/CD pipeline

## Assignment (actual)
- Malik: backend/twig, integration, CSS, critical fixes
- Christophe: backend/twig, functional validation

## Key dependencies
- Stripe (API key and success callback)
- Doctrine (booking/payment data consistency)
- Twig/CSS (admin dashboard readability)
