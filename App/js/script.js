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
