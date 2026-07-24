# Content types

SRH Connect uses three main content types in both the Joomla and Strapi implementations.

## Event

Campus and partner events: title, description, start date, free/paid flag, category, and venue.

## Ambassador

Student ambassador profiles: name, email, bio, faculty, nationality, and active status.

## Club

Student clubs and societies: name, description, category, meeting schedule, and contact email.

## Where they live

| System | Backend | Frontend routes |
|--------|---------|-----------------|
| **Strapi** | Content-Type Builder / Content Manager | `/events`, `/ambassadors`, `/clubs` |
| **Joomla** | `com_srhconnect` tables | `/events`, `/ambassadors`, `/clubs` |
