// ↓ Japanese Ramen Cultureのアコーディオン ↓
export default function () {
    document.addEventListener('DOMContentLoaded', () => {
        const title = document.querySelector('.accordion-title');
        if (title) {
            let content = title.nextElementSibling;
            title.addEventListener('click', () => {
                title.classList.toggle('is-shown');
                content.classList.toggle('is-shown');
            });
        };
    });
};
  // ↑ Japanese Ramen Cultureのアコーディオン ↑