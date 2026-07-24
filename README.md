# SRH Connect — Joomla CMS Project

Parallel to `Strapi-Cms`: same ambassador platform idea, **3 data types**, backend + frontend.

## The 3 data types (show these in the video)

| # | Data type | Strapi | Joomla (`com_srhconnect`) |
|---|-----------|--------|---------------------------|
| 1 | **Event** | Content-Type `Event` | Table `#__srh_events` |
| 2 | **Ambassador** | Content-Type `Ambassador` | Table `#__srh_ambassadors` |
| 3 | **Club** | Content-Type `Club` | Table `#__srh_clubs` |

Fabian wants **data types**, not framework “models” — show the CMS admin screens where content structure is defined and where content is entered.

## Folder map

```
Cms-Project/
  data/content.json          # seed used by frontend fallback
  joomla/com_srhconnect/     # installable Joomla component (3 data types + SQL seed)
  joomla/README.md           # install steps
  frontend/                  # React app that populates Events / Ambassadors / Clubs
  VIDEO_SCRIPT.md            # ~3 minute submission script
  README.md
```

## Run the Joomla frontend (demo without full Joomla)

```bash
cd frontend
npm install
npm run dev
```

Open http://localhost:5174 — pages load the 3 types from `public/content.json` (same seed as the component SQL).

## Connect to a live Joomla site

1. Install Joomla (XAMPP / your existing `Cmsproject` install).
2. Zip `joomla/com_srhconnect` and install via **System → Extensions**.
3. In `frontend`, create `.env`:

```
VITE_JOOMLA_API=http://localhost/your-joomla-folder
```

4. Restart `npm run dev`.

## Strapi side

Use your existing project: `Downloads/Strapi-Cms`  
Backend: `npm run develop` → http://localhost:1337/admin  
Frontend: `frontend/npm run dev` → Events / Ambassadors / Clubs pages.
