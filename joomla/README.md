# com_srhconnect

Joomla component that powers SRH Connect content: events, ambassadors, and clubs.

## Content types

| Type | Table (Laragon prefix `dvfnb_`) | Admin |
|------|----------------------------------|--------|
| **Event** | `dvfnb_srh_events` | Components → SRH Connect |
| **Ambassador** | `dvfnb_srh_ambassadors` | Components → SRH Connect |
| **Club** | `dvfnb_srh_clubs` | Components → SRH Connect |

## Install

1. Zip the `com_srhconnect` folder (the folder that contains `srhconnect.xml`).
2. In Joomla Admin go to **System → Install → Extensions** and upload the zip.
3. Open **Components → SRH Connect** to manage content (sample rows are seeded on install).
4. Optional: add a menu item for **SRH Connect → Events** on the site.

On Laragon this project is already installed under `C:\laragon\www\joomla`.

## API endpoints

Site root `http://localhost/joomla`:

- `index.php?option=com_srhconnect&task=api.events`
- `index.php?option=com_srhconnect&task=api.ambassadors`
- `index.php?option=com_srhconnect&task=api.clubs`

The React frontend uses a Vite proxy in development (`/joomla-api` → Joomla) so it loads live data without CORS issues.

## Database (HeidiSQL)

Laragon → **Database** → open `joomla` → tables above.

## Offline / local frontend

If the API is unreachable, the React app falls back to `frontend/public/content.json`.
