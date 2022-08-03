let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.remove();
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
        scrollTopButton.style = "left: 10px;transform: rotate(0deg);";
    } else {
        scrollTopButton.style = "left: -60px;";
    }
};
scrollTopButton.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};

$(".vision-carousel").owlCarousel({
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: true,
    navText : ["","<i class='fa fa-chevron-left'></i>"],
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:3,
        },
    }

  });
  $(".message-carousel").owlCarousel({
    margin : 20,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        400:{
            items:2,
        },
        768:{
            items:3,
        },
        1000:{
            items:4,
        },

    }
  });
