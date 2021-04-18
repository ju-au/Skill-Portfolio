export default function() {

    const keyName = 'visited';
    const keyValue = true;

    const welcome = document.getElementById('welcome');
    const welcome__close = document.getElementById('welcome__close');
    const header__welcome = document.getElementById('header__welcome');

    header__welcome.addEventListener('click', () => {
        welcome.classList.add('is-shown');
    });

    if (!sessionStorage.getItem(keyName)) {
        welcome.classList.add('is-shown');
        sessionStorage.setItem(keyName, keyValue);
    };

    welcome__close.addEventListener('click', () => {
        welcome.classList.remove('is-shown');
    });

};
