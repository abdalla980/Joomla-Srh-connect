/**
 * Loads the 3 data types for the frontend.
 * Prefer live Joomla API if VITE_JOOMLA_API is set; otherwise use local seed JSON
 * (same content populated from the Joomla component SQL seed).
 */
const JOOMLA = import.meta.env.VITE_JOOMLA_API || ''

async function fromJoomla(task) {
  const res = await fetch(`${JOOMLA}/index.php?option=com_srhconnect&task=api.${task}`)
  if (!res.ok) throw new Error(`Joomla ${res.status}`)
  const json = await res.json()
  return json.data || []
}

async function fromSeed() {
  const res = await fetch('/content.json')
  if (!res.ok) throw new Error('Seed missing')
  return res.json()
}

export async function fetchEvents() {
  if (JOOMLA) {
    try { return await fromJoomla('events') } catch { /* fall through */ }
  }
  const seed = await fromSeed()
  return seed.events
}

export async function fetchAmbassadors() {
  if (JOOMLA) {
    try { return await fromJoomla('ambassadors') } catch { /* fall through */ }
  }
  const seed = await fromSeed()
  return seed.ambassadors
}

export async function fetchClubs() {
  if (JOOMLA) {
    try { return await fromJoomla('clubs') } catch { /* fall through */ }
  }
  const seed = await fromSeed()
  return seed.clubs
}
