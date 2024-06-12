import React from 'react';
import Carousel from 'react-bootstrap/Carousel';
import image1 from '../../assets/carousel/image1.png';
import image2 from '../../assets/carousel/image2.jpeg';
import image3 from '../../assets/carousel/image3.webp';
import image4 from '../../assets/carousel/image4.jpg';
import image5 from '../../assets/carousel/image5.jpg';
import image6 from '../../assets/carousel/image6.jpg';
import image7 from '../../assets/carousel/image7.webp';
import image8 from '../../assets/carousel/image8.jpg';

const images = [
  { src: image1, alt: 'Slide 1' },
  { src: image2, alt: 'Slide 2' },
  { src: image3, alt: 'Slide 3' },
  { src: image4, alt: 'Slide 4' },
  { src: image5, alt: 'Slide 5' },
  { src: image6, alt: 'Slide 6' },
  { src: image7, alt: 'Slide 7' },
  { src: image8, alt: 'Slide 8' },
];
const BootstrapCarousel = () => {
  return (
    <Carousel interval={1000} controls={true} indicators={true}> {/* Adjust the interval and controls */}
      {images.map((image, index) => (
        <Carousel.Item key={index}>
          <img
            className="d-block w-100"
            src={image.src}
            alt={image.alt}
          />
        </Carousel.Item>
      ))}
    </Carousel>
  );
};


export default BootstrapCarousel;
