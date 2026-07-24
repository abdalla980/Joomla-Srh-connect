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

By default the app loads sample data from `frontend/public/content.json`. To use a live Joomla backend, set:

```
VITE_JOOMLA_API=http://localhost/your-joomla-site
```

## Joomla component

See [joomla/README.md](joomla/README.md) for install steps and API endpoints.

## Related project

The Strapi version of SRH Connect lives at [abdalla980/Srh-Connect](https://github.com/abdalla980/Srh-Connect).
