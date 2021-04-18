'use strict';

// // ↓ スライドショー ↓
// // import {carousel} from './carousel.js';
// const elID = document.getElementById('information__img');
// const images = [
//     '../wp-content/themes/ramen-nobu/assets/images/location/exterior11.jpg',
//     '../wp-content/themes/ramen-nobu/assets/images/location/lantern-lane11.jpg',
//     '../wp-content/themes/ramen-nobu/assets/images/location/gate11.jpg'
// ];
// const speed = 4000;
// carousel(elID, images, speed);
// // ↑ スライドショー ↑

let mySwiper = new Swiper('.swiper-container', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    autoplay: {
        delay: 5000,
    },
    effect: 'coverflow',
});