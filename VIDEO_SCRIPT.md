# Video script (~3 minutes) — Strapi + Joomla

Recording notes. Keep under 3 minutes.

## Open before recording

| Window | URL |
|--------|-----|
| Strapi admin | http://localhost:1337/admin |
| Strapi frontend | http://localhost:5173 |
| Joomla admin | http://localhost/joomla/administrator/ |
| Joomla **site** frontend | http://localhost/joomla/ |
| HeidiSQL (optional) | Laragon → Database |

**Joomla login:** `admin` / `TempPass123!`

---

## 0:00–0:15 · Intro

> “I built SRH Connect in Strapi and Joomla with the same three data types: Event, Ambassador, and Club. Strapi is headless with a React frontend. Joomla uses real database tables and renders them in the normal Joomla website.”

---

## 0:15–1:05 · Strapi backend + frontend

1. Strapi admin → **Content-Type Builder** → Event, Ambassador, Club  
2. Strapi React app → Events / Ambassadors / Clubs  

> “Strapi defines content types in the admin and exposes an API. A separate React app consumes that API.”

---

## 1:05–2:10 · Joomla backend (real tables)

1. Login to http://localhost/joomla/administrator/  
2. **Components → SRH Connect** — show dashboard with 3 data types  
3. Open **Events**, **Ambassadors**, **Clubs** list screens  
4. Optional: HeidiSQL → database `joomla` →  
   `dvfnb_srh_events`, `dvfnb_srh_ambassadors`, `dvfnb_srh_clubs`  

> “In Joomla these are real MySQL tables managed inside the CMS component — not a headless API-only setup.”

---

## 2:10–2:45 · Joomla site frontend (Cassiopeia)

1. Open http://localhost/joomla/  
2. Use menu: **SRH Connect**, **Events**, **Ambassadors**, **Clubs**  
3. Show that event titles from the database appear in the Joomla template  

> “The Joomla frontend is the CMS website itself. Views read the tables and render HTML in the Cassiopeia template.”

Optional proof: change an event title in the admin/HeidiSQL, refresh the Events menu page.

---

## 2:45–3:00 · Differences

> “Strapi is headless: content types plus API, custom React UI. Joomla is a classic CMS: the same three data types live in tables and are shown through Joomla menus and site views. Same project content, different architecture.”

Repos: your name + GitHub links.

## Repos

- https://github.com/abdalla980/Srh-Connect  
- https://github.com/abdalla980/Joomla-Srhconnect  
