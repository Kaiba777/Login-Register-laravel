const main = document.querySelector('.main');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnLogin = document.querySelector('.btn-login');
const iconClose = document.querySelector('.x');


registerLink.addEventListener('click', () => {
    main.classList.add('active');
});

loginLink.addEventListener('click', () => {
    main.classList.remove('active');
});

btnLogin.addEventListener('click', () => {
    main.classList.add('active-btn');
});

iconClose.addEventListener('click', () => {
    main.classList.remove('active-btn');
});