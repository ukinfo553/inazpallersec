var instructor = new Swiper(".instructor", {
    slidesPerView: 1,
    spaceBetween: 20,
    //centeredSlides: true,
    //roundLengths: true,

    autoplay:true,
    loop:true,
    pagination: {
      el: ".instructor .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".instructor .swiper-button-next",
      prevEl: ".instructor .swiper-button-prev",
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 480px
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      992: {
        slidesPerView: 3,
        spaceBetween: 10,
      }
    }
});

var myGladiators = new Swiper(".myGladiators", {
    slidesPerView: 1,
    spaceBetween: 40,
    loop:false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    mousewheel: true,
    keyboard: true,
    // Responsive breakpoints
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    }
  });

  var swiper = new Swiper(".mySwiper3", {
    spaceBetween: 10,
    slidesPerView: 4,
    //direction: 'vertical',
    freeMode: true,
    watchSlidesProgress: true,

  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 50,
    navigation: {
      nextEl: ".mySwiper3 .swiper-button-next",
      prevEl: ".mySwiper3 .swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  // Get all FAQ items

//navbar fixed
function scrollNavbar() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.querySelector(".navbar").classList.add("fixedNav");
  } else {
      document.querySelector(".navbar").classList.remove("fixedNav");
  }
}

window.addEventListener('scroll', scrollNavbar);

// topup button code start
let mybutton = document.querySelector(".topBtn");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.right = "25px";
    } else {
        mybutton.style.right = "-70px";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// footer sticky

function Mobilesticky() {
    let a = document.querySelector('.sticky-footer');
    if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
        a.style.bottom = "0"
    }
    else {
        a.style.bottom = "-55px"
    }
}
window.addEventListener('scroll', Mobilesticky);

//mobile CTO function
function mobileCTO() {
  let a = document.querySelector('.fixed-footerMob');
  if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
      a.style.bottom = "110px"
  }
  else {
      a.style.bottom = "-50%"
  }
}
window.addEventListener('scroll', mobileCTO);

// navlink activation
document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('nav .nav-link');

  links.forEach(function(link) {
    link.addEventListener('click', function(event) {
      // event.preventDefault();

      // Remove the 'active' class from all links
      links.forEach(function(link) {
        link.classList.remove('navactive');
      });

      // Add the 'active' class to the clicked link
      this.classList.add('navactive');

    });
  });
});

//nav enroll
function navEnroll(){
  let a = document.querySelector('nav .button2');
  if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000  && window.matchMedia("(min-width: 992px)").matches){
      a.classList.remove("d-none");
  }
  else{
    a.classList.add("d-none")
  }
}
window.addEventListener('scroll', navEnroll);

// ====== faq collapse start =======//
var section1Buttons = document.querySelectorAll('.faqsec button.accordion-button');
var section2Buttons = document.querySelectorAll('.faqsec .accordion-collapse');

section1Buttons.forEach(function(button, index) {
  let targetValue = button.dataset.bsTarget;

  let updatedTargetValue = `${targetValue}_${index}`;
  button.dataset.bsTarget = updatedTargetValue;
});

section2Buttons.forEach(function(id, index) {
    let originalId = id.getAttribute('id');
    let updatedId = `${originalId}_${index}`;
    id.setAttribute('id', updatedId);
});
// ====== faq collapse end =======//

// ======= model start ========== //
var modal = document.getElementById("myModal");
var buttons = document.querySelectorAll('.modal-btn');
var span = document.querySelector(".close");
var modalHeader = document.getElementById("modal-header");

buttons.forEach(button => {
  console.log(button)
  button.addEventListener("click", function() {
    modalHeader.innerText = this.title;
    modal.style.display = "block";
  });
});

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
