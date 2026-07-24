# SRH Connect (Joomla)

Campus community platform for SRH students — browse events, meet ambassadors, and discover clubs.

This repository is the **Joomla** implementation: a custom component for structured content, plus a React frontend that displays it.

## Content types

| Type | Description | Storage |
|------|-------------|---------|
| **Event** | Campus and partner events with date, venue, and category | `#__srh_events` |
| **Ambassador** | Student ambassadors and contact profiles | `#__srh_ambassadors` |
| **Club** | Student clubs and societies | `#__srh_clubs` |

## Project structure

```
data/content.json       Sample content (frontend fallback)
joomla/com_srhconnect/  Installable Joomla component
frontend/               React + Vite app
```

## Frontend

```bash
cd frontend
npm install
npm run dev
```

Open [http://localhost:5174](http://localhost:5174).

The app reads live data from the Joomla site via `VITE_JOOMLA_API` (see `frontend/.env.example`). In local Laragon setups that is usually:

```
VITE_JOOMLA_API=http://localhost/joomla
```

API endpoints:

- `/index.php?option=com_srhconnect&task=api.events`
- `/index.php?option=com_srhconnect&task=api.ambassadors`
- `/index.php?option=com_srhconnect&task=api.clubs`

## Joomla component

See [joomla/README.md](joomla/README.md) for install steps.

With Laragon, the site typically lives at `C:\laragon\www\joomla` and is served at [http://localhost/joomla](http://localhost/joomla). Admin: [http://localhost/joomla/administrator](http://localhost/joomla/administrator).

Database tables (prefix may differ):

- `*_srh_events`
- `*_srh_ambassadors`
- `*_srh_clubs`

## Related project

The Strapi version of SRH Connect lives at [abdalla980/Srh-Connect](https://github.com/abdalla980/Srh-Connect).
