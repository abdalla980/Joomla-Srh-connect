/**
 * Loads Event / Ambassador / Club from the live Joomla backend.
 * Dev: Vite proxies /joomla-api → http://localhost/joomla
 * Prod: set VITE_JOOMLA_API to the Joomla site root.
 */
const JOOMLA_BASE = import.meta.env.VITE_JOOMLA_API
  ? `${import.meta.env.VITE_JOOMLA_API}`
  : '/joomla-api'

async function fromJoomla(task) {
  const url = `${JOOMLA_BASE}/index.php?option=com_srhconnect&task=api.${task}`
  const res = await fetch(url)
  if (!res.ok) throw new Error(`Joomla ${res.status}`)
  const json = await res.json()
  return json.data || []
}

async function fromSeed() {
  const res = await fetch('/content.json')
  if (!res.ok) throw new Error('Seed missing')
  return res.json()
}

async function load(task, seedKey) {
  try {
    return await fromJoomla(task)
  } catch {
    const seed = await fromSeed()
    return seed[seedKey] || []
  }
}

export const fetchEvents = () => load('events', 'events')
export const fetchAmbassadors = () => load('ambassadors', 'ambassadors')
export const fetchClubs = () => load('clubs', 'clubs')

export function getJoomlaBase() {
  return JOOMLA_BASE
}
