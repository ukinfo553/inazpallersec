var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    //centeredSlides: true,
    //roundLengths: true,

    autoplay:true,
    // loopAdditionalSlides: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 480px
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 640px
      992: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });


var myGladiators = new Swiper(".myGladiators", {
    slidesPerView: 1,
    spaceBetween: 60,
    //centeredSlides: true,
    //roundLengths: true,

    autoplay:true,
    loop:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
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
        spaceBetween: 40,
      }
    }
  });

/*  var myGladiators = new Swiper(".myGladiators", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      type:'bullets'
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 480px
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 640px
      992: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });*/

  // Get all FAQ items
  const faqItems = document.querySelectorAll('.faq-item');

  // Add a click event listener to each FAQ item
  faqItems.forEach(item => {
    const question = item.querySelector('.question');
    const answer = item.querySelector('.answer');
    const plusIcon = question.querySelector('.plus-icon');

    // Toggle the answer visibility on click
    question.addEventListener('click', () => {
      if (answer.style.display === 'none' || answer.style.display === '') {
        answer.style.display = 'block';
        plusIcon.textContent = '-';
      } else {
        answer.style.display = 'none';
        plusIcon.textContent = '+';
      }
    });
  });

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
