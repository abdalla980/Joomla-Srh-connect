# Video script (~3 minutes) — Strapi + Joomla

**Goal:** Show that you defined **at least 3 data types** in each backend, then populate them on the frontend. Keep it under 3 minutes. Speak clearly; don’t open code files for “models”.

**Suggested title on screen:**  
`SRH Connect — Strapi vs Joomla (3 data types)`

---

## 0:00–0:15 · Intro (both projects on desktop)

> “For the CMS module I built the SRH Ambassador / Handic.app idea in two systems: **Strapi** and **Joomla**. I’ll show three data types in each backend — **Event**, **Ambassador**, and **Club** — and how the frontend displays that content.”

**On screen:** Desktop with two folders or two browser windows ready:
- Strapi admin + Strapi frontend
- Joomla admin (or component SQL/docs) + Joomla frontend (`Cms-Project/frontend`)

---

## 0:15–1:10 · Strapi backend — create / show 3 data types

**Open:** `http://localhost:1337/admin`  
**Go to:** Content-Type Builder (left sidebar)

**Click through (fast):**
1. **Event** — open it, scroll fields: title, description, start_date, is_free, event_category, venue relation  
2. **Ambassador** — name, email, bio, faculty, active  
3. **Club** — name, description, category, meeting_schedule, contact_email  

**Say:**
> “In Strapi, data types are **Content-Types**. I created Event, Ambassador, and Club in the Content-Type Builder. Each type has its own fields — this is structured content, not application models.”

**Then open Content Manager** (optional 10 sec):
- Open **Event** collection → show 1–2 entries (e.g. Berlin Inclusive Film Festival)  
- Briefly open **Ambassador** and **Club** lists  

> “Editors fill these types in the Content Manager. The API exposes them automatically.”

---

## 1:10–1:40 · Strapi frontend — populate / display

**Open:** Strapi frontend (e.g. `http://localhost:5173`)

**Click:**
1. **Events** — show cards/list coming from `/api/events`  
2. **Ambassadors** — show profiles from `/api/ambassadors`  
3. **Clubs** — show clubs from `/api/clubs`  

**Say:**
> “The React frontend fetches each data type from Strapi’s REST API and renders it. Same three types the backend defines.”

*(If logged in, optionally flash **My Events** for 5 seconds — nice extra, not required.)*

---

## 1:40–2:25 · Joomla backend — same 3 data types

**Option A — if component is installed (best):**  
**Open:** Joomla Admin → **Components → SRH Connect**

Show menus / tables:
1. **Events**  
2. **Ambassadors**  
3. **Clubs**  

Open one Event row and one Ambassador row.

**Say:**
> “In Joomla I built a small component, `com_srhconnect`, with three data types stored in three tables: events, ambassadors, and clubs. Again — content structure in the CMS, not MVC model classes for the camera.”

**Option B — if install isn’t ready (still fine for video):**  
**Open in editor briefly (5–8 sec only):**  
`Cms-Project/joomla/com_srhconnect/admin/sql/install.mysql.utf8.sql`

Scroll so the three `CREATE TABLE` blocks are visible: `#__srh_events`, `#__srh_ambassadors`, `#__srh_clubs`, plus `INSERT` seeds.

**Say:**
> “Here are the three data types as Joomla tables, with seed content matching the Strapi demo.”

---

## 2:25–2:50 · Joomla frontend — populate / display

**Open:** `http://localhost:5174` (`Cms-Project/frontend`)

**Click:**
1. **Events**  
2. **Ambassadors**  
3. **Clubs**  

**Say:**
> “This frontend loads the same three data types — from the Joomla component API when connected, or from the seeded JSON that mirrors the Joomla content. So both stacks populate Event, Ambassador, and Club in the browser.”

---

## 2:50–3:00 · Differences (close)

**Say (pick 3, keep short):**

1. **Structure:** Strapi = visual Content-Type Builder; Joomla = component/tables (or custom fields) inside a full CMS.  
2. **API:** Strapi gives a clean REST API out of the box; Joomla needs a component endpoint or core Web Services.  
3. **Feel:** Strapi is headless-first (frontend is separate by default); Joomla is a full site CMS that can also feed a separate React frontend.  
4. **Challenge:** Strapi was faster for custom types; Joomla needed more packaging/install steps but fits classic CMS workflows and roles.

> “Both platforms deliver the same three data types to a web frontend — different admin UX and architecture, same project goal.”

**End screen:** Your name + `Strapi-Cms` + `Cms-Project`

---

## Checklist before recording

- [ ] Strapi running (`npm run develop`) + admin login works  
- [ ] Strapi frontend shows Events / Ambassadors / Clubs  
- [ ] Joomla frontend running (`Cms-Project/frontend` → `npm run dev`)  
- [ ] Browser zoom ~110–125% so fields are readable  
- [ ] Close Discord/Slack popups; use a clean desktop  
- [ ] Max **3:00** — if long, cut Content Manager browsing first  

## What NOT to show (Fabian note)

- Don’t spend time in PHP “Model” classes  
- Don’t show 3 random unrelated article titles without explaining the **types**  
- Don’t debug live — if something fails, use the seed frontend + SQL file path (Option B)
