import { useEffect, useState } from 'react'
import { fetchAmbassadors } from '../joomla'

export default function Ambassadors() {
  const [items, setItems] = useState([])
  const [loading, setLoading] = useState(true)

  useEffect(() => {
    fetchAmbassadors().then(setItems).catch(() => setItems([])).finally(() => setLoading(false))
  }, [])

  return (
    <div className="page">
      <h1>Ambassadors</h1>
      <p className="sub">Data type 2 — loaded from Joomla <code>#__srh_ambassadors</code> (or seed JSON).</p>
      {loading ? <p>Loading…</p> : (
        <div className="grid">
          {items.map(a => (
            <article key={a.id} className="card">
              <h2>{a.name}</h2>
              <p className="details">{a.faculty} · {a.nationality}</p>
              <p>{a.bio}</p>
              <a href={`mailto:${a.email}`}>{a.email}</a>
            </article>
          ))}
        </div>
      )}
    </div>
  )
}
