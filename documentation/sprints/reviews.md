# Sprint Reviews (reconstructed from Git)

## Sprint 1 (12/01 → 23/01)
### Planned
- Start the project foundation.

### Delivered
- Symfony application base.

### Carry-over points
- Formal tracking (tickets/tools) was not in place at this stage.

---

## Sprint 2 (26/01 → 06/02)
### Planned
- Progress on core business features.

### Delivered
- Initial course/session management structures (later consolidated through fixes).

### Carry-over points
- Need for stricter business validation.

---

## Sprint 3 (09/02 → 20/02)
### Planned
- Stabilize the development/deployment environment.

### Delivered
- `47237f1` : Fix Dockerfile (composer image, config GD, permissions, cache clean).

### Carry-over points
- Focus on functional fixes in the next sprint.

---

## Sprint 4 (23/02 → 06/03)
### Planned
- Improve reliability of user/admin flows and payments.

### Delivered (fix commits)

- `c8ea4b7` : fix login
- `559c47f` : add label price form
- `df6ca1c` : create a course and create a session
- `51abf40` : add second argument to query builder in from
- `47b1850` : booking controler for payment without sessionBook
- `9c44211` : payment one session with Stripe
- `1e6c035` : move logo
- `9b4d454` : get repo courses by isActive
- `41c770e` : in dashboard display all payment with a sessionBook
- `7b5c198` : change syntax in home page + change filter desc to asc
- `48c1ff0` : in create course change step for duration of 15 to 10
- `1c5bbeb` : syntax create to created
- `eba64c7` : validate session time range against course duration
- `8a4c185` : color of text in card in admin page
- `963dc83` : delete the overview section because too repetitive
- `8542231` : title, form and auth-footer inside auth-container instead of auth-card
- `f540704` : auth footer syntax to auth-footer
- `3f16cb7` : class"user-info-row" to class="user-info-row"
- `3fbe6df`: in admin/sessions sessions pasted dont appear
- `3c8b83f`: change text of h2 and p in courses section
- `2e20089`: add security to dont cancel a reservation already past

### End-of-sprint demo
- Admin: course/session/user management, more readable dashboard (do)
- User: refund when paying per single session (do the 03/03)
- Business rules: consistency check between session duration and course duration(do)
