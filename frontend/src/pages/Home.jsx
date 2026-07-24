import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { fetchEvents, fetchAmbassadors, fetchClubs } from '../joomla'

export default function Home() {
  const [counts, setCounts] = useState({ events: 0, ambassadors: 0, clubs: 0 })

  useEffect(() => {
    Promise.all([fetchEvents(), fetchAmbassadors(), fetchClubs()]).then(([e, a, c]) => {
      setCounts({ events: e.length, ambassadors: a.length, clubs: c.length })
    }).catch(() => {})
  }, [])

  return (
    <div>
      <section className="hero">
        <div className="hero-inner">
          <p className="eyebrow">Joomla frontend · same 3 data types as Strapi</p>
          <h1>Your SRH Campus.<br />Connected.</h1>
          <p>Events, Ambassadors, and Clubs — populated from the Joomla backend.</p>
          <div className="hero-actions">
            <Link className="btn" to="/events">Browse Events</Link>
            <Link className="btn outline" to="/ambassadors">Meet Ambassadors</Link>
          </div>
        </div>
      </section>
      <section className="stats">
        <div><strong>{counts.events}</strong><span>Events</span></div>
        <div><strong>{counts.ambassadors}</strong><span>Ambassadors</span></div>
        <div><strong>{counts.clubs}</strong><span>Clubs</span></div>
      </section>
    </div>
  )
}
