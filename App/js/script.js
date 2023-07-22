//Image Slider Start
const slider = () => {
  const slideShow = document.querySelectorAll(".slider-img");

  const delay = 7000;
  var count = 0;

  slideShow[count].classList.toggle("active");
  slideShow[count].style.opacity = "1";

  const nextImg = () => {
    slideShow[count].style.opacity = "0";
    slideShow[count].classList.toggle("active");

    count = (count + 1) % slideShow.length;

    slideShow[count].style.opacity = "1";
    slideShow[count].classList.toggle("active");
  };

  setInterval(nextImg, delay);
};
slider();
//Image Slider End

//toggle the menu bar on click
function toggleMenu() {
  var navbarCollapse = document.getElementById("navbarSupportedContent");
  if (navbarCollapse.style.display === "block") {
    navbarCollapse.style.display = "none";
  } else {
    navbarCollapse.style.display = "block";
  }
}

// Initiate the wowjs
new WOW().init();
