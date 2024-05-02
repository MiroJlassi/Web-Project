document.getElementById('loginIcon').addEventListener('click', function() {
    var loginContainer = document.getElementById('loginContainer');
    loginContainer.classList.toggle('active');
});

document.getElementById('showRegister').addEventListener('click', function(e) {
    e.preventDefault();
    var registerContainer = document.getElementById('registerContainer');
    registerContainer.classList.add('active');
    var loginContainer = document.getElementById('loginContainer');
    loginContainer.classList.remove('active');
}); 