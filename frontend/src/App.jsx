import { NavLink, Route, Routes, Link } from 'react-router-dom'
import Home from './pages/Home'
import Events from './pages/Events'
import Ambassadors from './pages/Ambassadors'
import Clubs from './pages/Clubs'

export default function App() {
  return (
    <>
      <nav className="navbar">
        <Link to="/" className="nav-logo">SRH <span>Connect</span> <small>Joomla</small></Link>
        <div className="nav-links">
          <NavLink to="/events">Events</NavLink>
          <NavLink to="/ambassadors">Ambassadors</NavLink>
          <NavLink to="/clubs">Clubs</NavLink>
        </div>
      </nav>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/events" element={<Events />} />
        <Route path="/ambassadors" element={<Ambassadors />} />
        <Route path="/clubs" element={<Clubs />} />
      </Routes>
    </>
  )
}
