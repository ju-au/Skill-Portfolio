
export default function() {
  // ↓ IntersectionObserverで、footerが表示されたら.blankのscroll-down画像を非表示にする ↓
  const targets = document.querySelectorAll('footer');
  const scrollDown = document.getElementById('blank-scroll');
  const observer = new IntersectionObserver(callback);
  targets.forEach(target => observer.observe(target));
  function callback(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        scrollDown.classList.remove('is-shown');
      } else {
        scrollDown.classList.add('is-shown');
      };
    });
  };
};
// ↑ IntersectionObserverで、footerが表示されたら.blankのscroll-down画像を非表示にする ↑
