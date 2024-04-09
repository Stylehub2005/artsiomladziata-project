


var circles = document.querySelectorAll(".circle");
var progressBar = document.querySelector(".indicator");
var buttons = document.querySelectorAll("button");

var gideText = document.getElementById("gide_text");
var gideImage = document.getElementById("gide_img");
var currentStep = 1;
console.log(currentStep)


gideImage.src = "img/gideImg1.jpg";
function updateSteps(e) {

  if (e.target.id === "next") {
    currentStep++;
    console.log(currentStep);
  } else {
    currentStep--;
    console.log(currentStep);
  }
  if (currentStep === 1) {
    gideImage.src = "img/gideImg1.jpg";
    gideText.innerHTML = `<b>Výber produktu:</b><br><br>Na výber produktov použite katalóg.<br>Pridajte si ich do košíka.`;
  } else if (currentStep === 2) {
    gideImage.src = "img/gideImg2.jpg";
    gideText.innerHTML = `<b>Skontrolujte si košík:</b><br><br>Pozrite si obsah košíka.<br>V prípade potreby zmeňte množstvá alebo odstráňte položky.`;
  } else if (currentStep === 3) {
    gideImage.src = "img/gideImg3.jpg";
    gideText.innerHTML = `<b>Zadajte objednávku:</b><br><br>Zadajte údaje: kontakty, adresa, platba.<br>Pred potvrdením skontrolujte svoju objednávku.`;
  } else if (currentStep === 4) {
    gideImage.src = "img/gideImg4.jpg";
    gideText.innerHTML = `<b>Platba a potvrdenie:</b><br><br>Potvrďte objednávku.<br>.<br>Pokračujte k platbe, zadajte podrobnosti.`;
  }



  circles.forEach(function (circle, index) {
    if (index < currentStep) {
      circle.classList.add("active");
    } else {
      circle.classList.remove("active");
    }
  });


  progressBar.style.width = ((currentStep - 1) / (circles.length - 1)) * 100 + "%";


  if (currentStep === circles.length) {
    buttons[1].disabled = true;
  } else if (currentStep === 1) {
    buttons[0].disabled = true;
  } else {
    buttons.forEach(function (button) {
      button.disabled = false;
    });
  }
}


buttons.forEach(function (button) {
  button.addEventListener("click", updateSteps);
});
let slideIndex = 0;
showSlides();





