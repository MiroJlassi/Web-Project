
let SpecificDay = new Date("2023-10-07");
let CurrentDay = new Date();
let diff = Math.floor((CurrentDay - SpecificDay) / (1000 * 60 * 60 * 24));
document.getElementById("nbDays").textContent = "It's been " + diff + " days! since the 7th of OCTOBER";

console.log(diff)


var tabImages = ["MEDIA/IMG1.jpg", "MEDIA/IMG2.png", "MEDIA/IMG3.png", "MEDIA/IMG4.png"];
var numImage = 0;
function ChangeImage() {
    document.body.style.backgroundImage = "url(" + tabImages[numImage] + ")";
    if (numImage == 3) numImage = 0;
    else numImage++;
    setTimeout(ChangeImage, 5000);
}


