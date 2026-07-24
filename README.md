# SRH Connect (Joomla)

Campus community platform for SRH students — events, ambassadors, and clubs.

This is a **classic Joomla CMS** build: content is stored in MySQL tables and rendered by Joomla site views (Cassiopeia template), not a separate headless frontend.

## Content types

| Type | Table | Site menu | Admin |
|------|-------|-----------|--------|
| **Event** | `#__srh_events` | Events | Components → SRH Connect → Events |
| **Ambassador** | `#__srh_ambassadors` | Ambassadors | Components → SRH Connect → Ambassadors |
| **Club** | `#__srh_clubs` | Clubs | Components → SRH Connect → Clubs |

## Local URLs (Laragon)

| | URL |
|--|-----|
| Site | http://localhost/joomla/ |
| Admin | http://localhost/joomla/administrator/ |
| Files | `C:\laragon\www\joomla` |

## Component source

Installable package: `joomla/com_srhconnect/`

See [joomla/README.md](joomla/README.md).

## Related project

The Strapi (headless) version: [abdalla980/Srh-Connect](https://github.com/abdalla980/Srh-Connect).
