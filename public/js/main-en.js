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
    for( let i = 0 ; i < x.length  ; i++){
        x[i].addEventListener('click' , () => {
            document.querySelector('.menu-icons').click()
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

  $(".partners-slider").owlCarousel({
    items: 5,
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
            items: 3,
            nav: false,
        },
        1000: {
            items: 5,
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

// Mail
let inputs = document.querySelectorAll('.input'),
    sendBtn = document.getElementById("submit"),
    fullName = document.getElementById("fullName"),
    email = document.getElementById("email"),
    type = document.getElementById("type"),
    space = document.getElementById("space"),
    phone = document.getElementById("phoneNumber"),
    notes = document.getElementById("notes"),
    message = document.getElementById("message");
const validateEmail = (email) => {
    var regex =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(String(email).toLowerCase());
};
sendBtn.addEventListener("click", (e) => {
    e.preventDefault();
    flag = 0;

    if (fullName.value === "") {
        flag--;
        fullName.style = "border-bottom : 1px solid #f00";
    } else {
        flag++;
        fullName.style = "border-bottom : 1px solid #C4C4C4";
    }
    if (!validateEmail(email.value)) {
        flag--;
        email.style = "border-bottom : 1px solid #f00";
    } else {
        flag++;
        email.style = "border-bottom : 1px solid #C4C4C4";
    }
    if (space.value === "") {
        flag--;
        space.style = "border-bottom : 1px solid #f00";
    } else {
        flag++;
        space.style = "border-bottom : 1px solid #C4C4C4";
    }
    if (type.value === "") {
        flag--;
        type.style = "border-bottom : 1px solid #f00";
    } else {
        flag++;
        type.style = "border-bottom : 1px solid #C4C4C4";
    }
    if (notes.value === "") {
        flag--;
        notes.style = "border-bottom : 1px solid #f00";
    } else {
        flag++;
        notes.style = "border-bottom : 1px solid #C4C4C4";
    }
    if (phone.value.length < 10) {
        flag--;
        phone.style = "border-bottom : 1px solid #f00";
    } else {
        flag++;
        phone.style = "border-bottom : 1px solid #C4C4C4";
    }
    if (flag == 6)
        Email.send({
            Host: "smtp.elasticemail.com",
            Username: "mandar.sa.info@gmail.com",
            Password: "BAE326C632B5C1D753977147E78DC6E1C99A",
            To: "Hla@mandar.sa",
            From: "mandar.sa.info@gmail.com",
            Subject: " Mandar Form ",
            Body: `Name : ${fullName.value} <br>
                   Email : ${email.value} <br>
                   Space : ${space.value}<br>
                   Project Type : ${type.value} <br>
                   Phone : ${phone.value} <br>
                   Notes : ${notes.value}<br>
                   `,
        }).then(
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "We will get in touch with you very soon",
                confirmButtonText: "close",
                closeOnConfirm: false,
                closeOnCancel: false,
            })
        ).then(
            inputs.forEach((input) => { input.value = '' })
        );
});
