# Install com_srhconnect in Joomla

## What this component adds (3 data types)

| Data type | Table | Admin menu |
|-----------|-------|------------|
| **Event** | `#__srh_events` | Components → SRH Connect → Events |
| **Ambassador** | `#__srh_ambassadors` | Components → SRH Connect → Ambassadors |
| **Club** | `#__srh_clubs` | Components → SRH Connect → Clubs |

These are **content/data types** managed in the CMS backend — not “models” you write for a framework lecture.

## Install steps

1. Zip the `com_srhconnect` folder (the folder that contains `srhconnect.xml`).
2. In Joomla Admin → **System → Install → Extensions** → upload the zip.
3. Open **Components → SRH Connect** and confirm the three menus / seeded rows.
4. (Optional) Create a menu item of type **SRH Connect → Events** for the site frontend.

## JSON for the React frontend

After install, if your site is `http://localhost/joomla`:

- `index.php?option=com_srhconnect&task=api.events`
- `index.php?option=com_srhconnect&task=api.ambassadors`
- `index.php?option=com_srhconnect&task=api.clubs`

Point `frontend/.env` `VITE_JOOMLA_API` at your site root.

## Without a live Joomla DB

The React frontend already falls back to `../data/content.json` — same three data types — so you can still demo population on screen.
