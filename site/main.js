
let SpecificDay = new Date("2023-10-07");
let CurrentDay = new Date();
let diff = Math.floor((CurrentDay - SpecificDay) / (1000 * 60 * 60 * 24));
document.getElementById("nbDays").textContent =
  "It's been " + diff + " days!";

  var tabImages = ["IMG1.jpg", "IMG2.png", "IMG3.png", "IMG4.png"];
  var numImage = 0;
  function ChangeImage() {
      document.body.style.backgroundImage = "url(" + tabImages[numImage] + ")";
      if (numImage == 3) numImage = 0;
      else numImage++;
      setTimeout(ChangeImage, 2000);
  }
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