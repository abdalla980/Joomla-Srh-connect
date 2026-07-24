import { useEffect, useState } from 'react'
import { fetchClubs } from '../joomla'

export default function Clubs() {
  const [items, setItems] = useState([])
  const [loading, setLoading] = useState(true)

  useEffect(() => {
    fetchClubs().then(setItems).catch(() => setItems([])).finally(() => setLoading(false))
  }, [])

  return (
    <div className="page">
      <h1>Clubs</h1>
      <p className="sub">Data type 3 — loaded from Joomla <code>#__srh_clubs</code> (or seed JSON).</p>
      {loading ? <p>Loading…</p> : (
        <div className="grid">
          {items.map(c => (
            <article key={c.id} className="card">
              <div className="meta"><span className="badge">{c.category}</span></div>
              <h2>{c.name}</h2>
              <p>{c.description}</p>
              <p className="details">🗓 {c.meeting_schedule}</p>
              <a href={`mailto:${c.contact_email}`}>{c.contact_email}</a>
            </article>
          ))}
        </div>
      )}
    </div>
  )
}
