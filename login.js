document.getElementById('loginIcon').addEventListener('click', function() {
    var loginContainer = document.getElementById('loginContainer');
    loginContainer.classList.toggle('active');
});


console.log("hsdjfhsjdf");
document.getElementById('showRegister').addEventListener('click', function(e) {
    e.preventDefault();
    var registerContainer = document.getElementById('registerContainer');
    registerContainer.classList.add('active');
    var loginContainer = document.getElementById('loginContainer');
    loginContainer.classList.remove('active');
}); 
function closeContainer1(){
    var container = document.getElementById('loginContainer');
    container.style.display = "none";

}
function closeContainer2() {
    var container = document.getElementById('registerContainer');
    container.style.display = "none";
}



