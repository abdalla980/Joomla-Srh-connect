# com_srhconnect

Classic Joomla component for SRH Connect.

## What it does

1. Creates **3 MySQL tables** (Event, Ambassador, Club)  
2. Shows them in **Joomla admin** list screens  
3. Renders them on the **Joomla website** via site views + menu items  

This is not a headless setup — the public pages are normal Joomla site pages.

## Tables

| Type | Table |
|------|--------|
| Event | `#__srh_events` (`dvfnb_srh_events` on Laragon) |
| Ambassador | `#__srh_ambassadors` |
| Club | `#__srh_clubs` |

## Site pages

- `index.php?option=com_srhconnect&view=home`
- `index.php?option=com_srhconnect&view=events`
- `index.php?option=com_srhconnect&view=ambassadors`
- `index.php?option=com_srhconnect&view=clubs`

## Admin

Components → **SRH Connect** → Events / Ambassadors / Clubs

## Install

1. Zip `com_srhconnect` (folder containing `srhconnect.xml`)  
2. Joomla Admin → System → Install → Extensions  
3. Create menu items of type SRH Connect → Home / Events / Ambassadors / Clubs  
