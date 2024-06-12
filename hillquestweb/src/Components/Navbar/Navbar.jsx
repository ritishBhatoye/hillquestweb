import React, { useState } from 'react';
import './Navbar.css';
import logo_light from '../../assets/logo-black.png';
import logo_dark from '../../assets/logo-white.png';
import search_icon_light from '../../assets/search-w.png';
import search_icon_dark from '../../assets/search-b.png';
import toggle_light from '../../assets/night.png';
import toggle_dark from '../../assets/day.png';

const Navbar = ({ theme, setTheme }) => {
  const [isExpanded, setIsExpanded] = useState(false);

  const toggle_mode = () => {
    setTheme(theme === 'light' ? 'dark' : 'light');
  };

  const toggleNavbar = () => {
    setIsExpanded(!isExpanded);
  };

  return (
    <div className={`navbar ${theme === 'dark' ? 'dark' : ''} ${isExpanded ? 'expanded' : ''}`}>
      <img src={theme === 'light' ? logo_light : logo_dark} alt="logo" className="logo" />
      <button className={`navbar-toggler ${theme === 'dark' ? 'dark' : ''} `} onClick={toggleNavbar}>
        ☰
      </button>
      <ul className={`nav-links ${isExpanded ? 'expanded' : ''}`}>
        <li><a href="/">Home</a></li>
        <li><a href="/sites">Sites</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/help">Help</a></li>
      </ul>
      {/* <div className="search-box">
        <input type="text" placeholder="Search" />
        <img src={theme === 'light' ? search_icon_light : search_icon_dark} alt="search icon" />
      </div> */}
      <div className="auth-buttons">
        <button className="auth-button">Sign Up</button>
        <button className="auth-button">Login</button>
      </div>
      <img
        onClick={toggle_mode}
        src={theme === 'light' ? toggle_light : toggle_dark}
        alt="toggle icon"
        className="toggle-icon"
      />
    </div>
  );
};

export default Navbar;
