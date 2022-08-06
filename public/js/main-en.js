let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.style.transition = '.5s';
        preloader.style.opacity = '0';
        preloader.style.visibility = 'hidden';
        });
}

window.addEventListener("load", () => {
    x = document.querySelectorAll('.links a')
    for( let i = 1 ; i < x.length  ; i++){
        x[i].addEventListener('click' , () => {
            document.querySelector('.burger').click()
        })
    }
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});

let scrollTopButton = document.getElementById("scroll_top");
window.onscroll = () => {
    if (scrollY >= 430) {
        scrollTopButton.style = "bottom: 30px;";
    } else {
        scrollTopButton.style = "bottom: -60px;";
    }
};
scrollTopButton.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};

$(".slider").owlCarousel({
    items: 1,
    loop: true,
    rtl : false,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 1,
        },
    },
  });

  $(".image-slider").owlCarousel({
    items: 1,
    loop: true,
    rtl : false,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 1,
        },
    },
  });
//   text animation
const hero = document.querySelector('.hero');
const text = hero.querySelectorAll('h2');
const walk = 50; // px
const svg = document.querySelector('.line-svg');
const circle =  document.querySelector('.red-circle');

function shadow(e) {
    const {
        offsetWidth: width,
        offsetHeight: height
    } = hero;
    let {
        offsetX: x,
        offsetY: y
    } = e;

    const xWalk = Math.round((x / width * walk) - (walk / 2));
    const yWalk = Math.round((y / height * walk) - (walk / 2));
    for(let i = 0 ; i < text.length ; i++){
        text[i].style.textShadow = `
        ${xWalk}px ${yWalk}px 0 rgba(255, 255, 255, 0.1)`;

    }
    circle.style = ` right : calc( 25% + ${ yWalk}px)`;

}

hero.addEventListener('mousemove', shadow);
var mouseX;
var mouseY;
window.onmousemove = handleMouseMove;
function handleMouseMove(event) {
  event = event || window.event;
  svg.style.top=event.clientY/100 + 75 + "px";
  svg.style.left=event.clientX/100 + "px";
}
