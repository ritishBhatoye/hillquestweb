import React from 'react';
import BootstrapCarousel from '../Components/BootstrapCarousel/BootstrapCarousel';
import './Home.css';

const Home = () => {
  return (
    <div className="home-container">
      <BootstrapCarousel />
      <div className="home-content">
        <h1>Home Page</h1>
        <p>Welcome to the home page!</p>
      </div>
    </div>
  );
};

export default Home;
