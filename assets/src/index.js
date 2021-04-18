require('intersection-observer');
import './style.scss';

import welcome from './js/welcome.js';
welcome();

import objectFitImages from 'object-fit-images';
objectFitImages();

import Swiper from 'swiper';
import 'swiper/dist/css/swiper.min.css';
// import Swiper from 'swiper/bundle';
// import 'swiper/swiper-bundle.css';

let mySwiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  effect: 'fade',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',  
    prevEl: '.swiper-button-prev',
  },
});

// forEachのpolyfill
if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
}

import FVscrollDown from './js/FVscrollDown.js';
FVscrollDown();

import Rellax from 'rellax';
const rellax = new Rellax('.rellax');

import accordion from './js/accordion.js'
accordion();

import bgFix from './js/bgFix.js';
bgFix();

import blank from './js/blank.js';
blank();
