const $window = $(window);
$window.scroll(function () {
  if ($window.scrollTop() > 300) {
    $('.header').addClass('fixed');
    $('.header').removeClass('scrolled');
  } else {
    $('.header').addClass('scrolled');
    $('.header').removeClass('fixed');
  };
});


$(document).ready(function () {
  $('.modKv').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    pauseOnHover: false,
  });
});

$(document).ready(function () {
  $('.modKv2col').slick({
    infinite: true,
    lazyLoad: 'progressive',
    speed: 5000,
    slidesToShow: 1,
    variableWidth: true,
    height: "530px",
    autoplay: true,
    gap: "5px",
    autoplaySpeed: 0,
    cssEase: 'linear',
    pauseOnHover: false,
  });
});

const mediaQuery = window.matchMedia('(max-width: 768px)');
handle(mediaQuery);

function handle(mm) {
  $(function () {
    let header = document.getElementsByClassName('header');
    let nav = document.getElementsByClassName('header__nav');
    let button = document.getElementsByClassName('header__button');
    let openBtn = document.getElementsByClassName('header__navSp__openbtn');

    $(openBtn).click(function (e) {
      if ($(openBtn).hasClass("active")) {

        $(header).removeClass('bgChange');
        $(nav).removeClass('active');
        $(openBtn).removeClass('active');
        $(button).removeClass('active');

      } else {

        $(nav).toggleClass('active');
        $(header).toggleClass('bgChange');
        $(openBtn).toggleClass('active');
        $(button).toggleClass('active');
      }
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  var slider = document.getElementById('widthSlider');
  var image = document.getElementById('map');

  slider.oninput = function () {
    image.style.objectPosition = this.value + '%';
  }
});


// let btn = document.getElementsByClassName("header__navSp__openbtn");

// for (var i = 0; i < btn.length; i++) {
//   btn[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var content = this.nextElementSibling;
//     var bg = this.parentElement;
//     if (content.style.maxHeight){
//       content.style.maxHeight = null;
//     } else {
//       content.style.maxHeight = "80vh";
//     };
//     bg.classList.toggle('bgChange');
//   });
// }


let lanToggle = document.getElementsByClassName("contact__lan__text");

for (var a = 0; a < lanToggle.length; a++) {
  lanToggle[a].addEventListener("click", function () {
    var lan = this.nextElementSibling;
    if (lan.style.maxHeight) {
      lan.style.maxHeight = null;
    } else {
      lan.style.maxHeight = lan.scrollHeight + "px";
    };
  });
}

let paymentSp = document.getElementsByClassName("modListTopPayment__item__title");

for (var d = 0; d < paymentSp.length; d++) {
  paymentSp[d].addEventListener("click", function () {
    var pays = this.nextElementSibling;
    this.classList.toggle('active');
    if (pays.style.maxHeight) {
      pays.style.maxHeight = null;
    } else {
      pays.style.maxHeight = pays.scrollHeight + 80 + "px";
    };
  });
}