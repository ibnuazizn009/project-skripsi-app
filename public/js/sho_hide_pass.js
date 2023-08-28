const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    if(type == 'text'){
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');
    }else{
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');
    }
    // toggle the eye slash icon
    // this.classList.toggle('fa-eye');
});