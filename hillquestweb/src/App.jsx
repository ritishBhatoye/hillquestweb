import React ,{ useEffect, useState } from 'react'
import Navbar from './Components/Navbar/Navbar'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Home from './pages/Home';
import Sites from './pages/Sites';
import About from './pages/About';
import Help from './pages/Help';
const App = () => {
  const current_theme=localStorage.getItem('current_theme');
  const [theme,setTheme]=useState(current_theme ? current_theme :'light');

  useEffect(()=>{
    localStorage.setItem('current_theme',theme);
  },[theme])
  return (
    <Router>
          

    <div className={`container ${theme}`}>
      <Navbar theme={theme} setTheme={setTheme} />
      <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/sites" element={<Sites />} />
          <Route path="/about" element={<About />} />
          <Route path="/help" element={<Help />} />
        </Routes>
    </div>
    </Router>
  )
}

export default App
