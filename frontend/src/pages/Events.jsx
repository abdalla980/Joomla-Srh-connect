import { useEffect, useState } from 'react'
import { fetchEvents } from '../joomla'

function formatDate(str) {
  if (!str) return '—'
  return new Date(str).toLocaleDateString('en-GB', { day: 'numeric', month: 'long', year: 'numeric' })
}

export default function Events() {
  const [events, setEvents] = useState([])
  const [loading, setLoading] = useState(true)

  useEffect(() => {
    fetchEvents().then(setEvents).catch(() => setEvents([])).finally(() => setLoading(false))
  }, [])

  return (
    <div className="page">
      <h1>Events</h1>
      <p className="sub">Data type 1 — loaded from Joomla <code>#__srh_events</code> (or seed JSON).</p>
      {loading ? <p>Loading…</p> : (
        <div className="list">
          {events.map(ev => (
            <article key={ev.id} className="card">
              <div className="meta">
                <span className="badge">{ev.event_category}</span>
                {Number(ev.is_free) ? <span className="badge free">Free</span> : <span className="badge paid">Paid</span>}
              </div>
              <h2>{ev.title}</h2>
              <p>{ev.description}</p>
              <p className="details">📅 {formatDate(ev.start_date)} · 📍 {ev.venue}</p>
            </article>
          ))}
        </div>
      )}
    </div>
  )
}
