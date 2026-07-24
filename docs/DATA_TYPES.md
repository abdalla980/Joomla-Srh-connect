# 3 data types — Strapi vs Joomla (quick reference)

## Shared types

1. **Event** — title, description, dates, free/paid, category, venue  
2. **Ambassador** — name, email, bio, faculty, nationality, active  
3. **Club** — name, description, category, meeting schedule, contact email  

## Where to click

### Strapi (`Downloads/Strapi-Cms`)
- Backend: Content-Type Builder → Event / Ambassador / Club  
- Content: Content Manager → same three collections  
- Frontend: `/events`, `/ambassadors`, `/clubs`  

### Joomla (`Downloads/Cms-Project`)
- Backend: install `joomla/com_srhconnect` → Components → SRH Connect  
- Or show SQL: `admin/sql/install.mysql.utf8.sql`  
- Frontend: `frontend` pages Events / Ambassadors / Clubs  

## One-line difference for the exam

> Strapi models content as headless Content-Types with an auto API; Joomla stores the same data types in a component’s tables and can expose them to a separate frontend.
