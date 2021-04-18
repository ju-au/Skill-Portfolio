// ↓ IntersectionObserverで、パララックスの背景画像と固定の背景画像を切り替え ↓
export default function () {
    const ioTargets = document.querySelectorAll('.blank');
    const parallax = document.getElementById('parallax');
    const noParallax = document.getElementById('no-parallax');
    if (parallax) {
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
    };
};
// ↑ IntersectionObserverで、パララックスの背景画像と固定の背景画像を切り替え ↑
