export default function () {
    const FVScroll = document.getElementById('first-view__scroll');
    if (FVScroll) {
        setTimeout(() => {
            FVScroll.classList.add('is-shown');
        }, 5000);
    };
};