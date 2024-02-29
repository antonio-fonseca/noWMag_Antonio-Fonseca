// // Gestione dell'evento per login
let login_btn = document.querySelector('#login_btn');
let login_form = document.querySelector('#login_form');
let check = false;

login_btn.addEventListener('click', () => {
    if (check == false) {
        login_form.classList.remove('d-none');
        login_form.classList.add('appear');
        login_btn.innerHTML = 'maybe later <';
        check = true;
    } else {
        login_form.classList.add('d-none');
        login_btn.innerHTML = '> Log in';
        check = false;
    }
});