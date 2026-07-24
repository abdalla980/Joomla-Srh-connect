# com_srhconnect

Joomla component that powers SRH Connect content: events, ambassadors, and clubs.

## Content types

| Type | Table | Admin |
|------|-------|--------|
| **Event** | `#__srh_events` | Components → SRH Connect → Events |
| **Ambassador** | `#__srh_ambassadors` | Components → SRH Connect → Ambassadors |
| **Club** | `#__srh_clubs` | Components → SRH Connect → Clubs |

## Install

1. Zip the `com_srhconnect` folder (the folder that contains `srhconnect.xml`).
2. In Joomla Admin go to **System → Install → Extensions** and upload the zip.
3. Open **Components → SRH Connect** to manage content (sample rows are seeded on install).
4. Optional: add a menu item for **SRH Connect → Events** on the site.

## API endpoints

If your site root is `http://localhost/joomla`:

- `index.php?option=com_srhconnect&task=api.events`
- `index.php?option=com_srhconnect&task=api.ambassadors`
- `index.php?option=com_srhconnect&task=api.clubs`

Point the React frontend `VITE_JOOMLA_API` env var at that site root.

## Offline / local frontend

If Joomla is not running, the React app falls back to `frontend/public/content.json` with the same content shape.
