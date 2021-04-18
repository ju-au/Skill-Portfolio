'use strict';

let mySwiper = new Swiper ('.swiper-container', {
  // 以下にオプションを設定
  loop: true, //最後に達したら先頭に戻る
  autoplay: {
    delay: 5000,
  },
  effect: 'fade',
 
  //ページネーション表示の設定
  pagination: { 
    el: '.swiper-pagination', //ページネーションの要素
    type: 'bullets', //ページネーションの種類
    clickable: true, //クリックに反応させる
  },
 
  //ナビゲーションボタン（矢印）表示の設定
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }, 
});

// ↓ Japanese Ramen Cultureのアコーディオン ↓
document.addEventListener('DOMContentLoaded', () => {
  const title = document.querySelector('.accordion-title');
  let content = title.nextElementSibling;
  title.addEventListener('click', () => {
    title.classList.toggle('is-active');
    content.classList.toggle('is-open');
  });
});
// ↑ Japanese Ramen Cultureのアコーディオン ↑




// ↓ パララックス ↓
const rellax = new Rellax('.rellax');
// ↑ パララックス ↑

// ↓ IntersectionObserverで、パララックスの背景画像と固定の背景画像を切り替え ↓
const ioTargets = document.querySelectorAll('.blank');
const parallax = document.getElementById('parallax');
const noParallax = document.getElementById('no-parallax');
const ioObserver = new IntersectionObserver(callback);
ioTargets.forEach(target => ioObserver.observe(target));
function callback(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      noParallax.classList.add('is-shown');
      parallax.classList.remove('is-shown');
    } else {
      noParallax.classList.remove('is-shown');
      parallax.classList.add('is-shown');

    };
  });
};
// ↑ IntersectionObserverで、パララックスの背景画像と固定の背景画像を切り替え ↑


// ↓ ページがロードされてから5秒後に、first viewにscroll-down画像を表示する ↓
const FVScroll = document.getElementById('first-view__scroll');
setTimeout(() => {
  FVScroll.classList.add('is-shown');
}, 5000)