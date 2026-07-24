# Video script (~3 minutes) — Strapi + Joomla

Private recording notes for the CMS comparison video. Keep under 3 minutes.

## What to have open before you start

| Window | URL |
|--------|-----|
| Strapi admin | http://localhost:1337/admin |
| Strapi frontend | http://localhost:5176 (or your Vite port) |
| Joomla admin | http://localhost/joomla/administrator/ |
| Joomla frontend | http://localhost:5174 |
| HeidiSQL (optional) | Laragon → Database |

**Joomla login:** username `admin` · password `TempPass123!`

---

## 0:00–0:15 · Intro

> “I built SRH Connect in two CMS platforms: Strapi and Joomla. I’ll show three data types — Event, Ambassador, and Club — in each backend, then how the frontend displays them.”

---

## 0:15–1:10 · Strapi backend

1. Open http://localhost:1337/admin  
2. **Content-Type Builder** → click **Event**, then **Ambassador**, then **Club** (show fields briefly)  
3. Optional 10s: **Content Manager** → open one Event entry  

> “In Strapi, data types are Content-Types. Event, Ambassador, and Club each have their own fields, and the API is generated automatically.”

---

## 1:10–1:40 · Strapi frontend

1. Open the Strapi React app  
2. Click **Events**, **Ambassadors**, **Clubs**  

> “The frontend fetches each type from Strapi’s REST API and renders it in the browser.”

---

## 1:40–2:25 · Joomla backend

1. Open http://localhost/joomla/administrator/ — sign in with `admin` / `TempPass123!`  
2. Show **Components → SRH Connect** (or the SRH Connect menu item)  
3. Optional: HeidiSQL → database `joomla` → tables  
   - `dvfnb_srh_events`  
   - `dvfnb_srh_ambassadors`  
   - `dvfnb_srh_clubs`  

> “In Joomla the same three data types live in the SRH Connect component and these three tables. Content is managed in the CMS and exposed through a small JSON API.”

---

## 2:25–2:50 · Joomla frontend

1. Open http://localhost:5174  
2. Click **Events**, **Ambassadors**, **Clubs**  

> “This frontend loads live data from the Joomla API — same three types as Strapi.”

Quick proof (optional): change an event title in HeidiSQL or admin, refresh the React Events page.

---

## 2:50–3:00 · Differences

> “Strapi is headless: you define content types and get an API by default. Joomla is a full CMS: the same data types sit in a component’s tables and can also feed a separate frontend. Strapi was faster for custom types; Joomla fits classic site administration and roles. Both deliver Event, Ambassador, and Club to the web.”

End on your name + both GitHub repos.

---

## Don’t show

- PHP model class code  
- Long debugging  
- Assignment briefings or lecturer names  

## Repos

- Strapi: https://github.com/abdalla980/Srh-Connect  
- Joomla: https://github.com/abdalla980/Joomla-Srhconnect  
