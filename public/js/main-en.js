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
        scrollTopButton.style = "bottom: 10px;";
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

$(".owl-carousel").owlCarousel({
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
