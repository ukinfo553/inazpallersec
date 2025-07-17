var instructor = new Swiper(".myAdvisor", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: false,
  pagination: {
    el: ".myAdvisor .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".myAdvisor .swiper-button-next",
    prevEl: ".myAdvisor .swiper-button-prev",
  },
  // mousewheel: true,
  keyboard: true,
  // Responsive breakpoints
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    }
  }
});

var myGladiators = new Swiper(".myGladiators", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // mousewheel: true,
  keyboard: true,
  // Responsive breakpoints
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
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

// function Mobilesticky() {
//     let a = document.querySelector('.sticky-footer');
//     if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
//         a.style.bottom = "0"
//     }
//     else {
//         a.style.bottom = "-55px"
//     }
// }
// window.addEventListener('scroll', Mobilesticky);

//mobile CTO function
// function mobileCTO() {
//   let a = document.querySelector('.fixed-footerMob');
//   if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
//       a.style.bottom = "110px"
//   }
//   else {
//       a.style.bottom = "-50%"
//   }
// }
// window.addEventListener('scroll', mobileCTO);

// navlink activation
document.addEventListener('DOMContentLoaded', function () {
  const links = document.querySelectorAll('nav .nav-link');

  links.forEach(function (link) {
    link.addEventListener('click', function (event) {
      // event.preventDefault();

      // Remove the 'active' class from all links
      links.forEach(function (link) {
        link.classList.remove('navactive');
      });

      // Add the 'active' class to the clicked link
      this.classList.add('navactive');

    });
  });
});

//nav enroll
function navEnroll() {
  let a = document.querySelector('nav .button2');
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000 && window.matchMedia("(min-width: 992px)").matches) {
    a.classList.remove("d-none");
  }
  else {
    a.classList.add("d-none")
  }
}
window.addEventListener('scroll', navEnroll);

// ====== faq collapse start =======//
var section1Buttons = document.querySelectorAll('.faqsec button.accordion-button');
var section2Buttons = document.querySelectorAll('.faqsec .accordion-collapse');

section1Buttons.forEach(function (button, index) {
  let targetValue = button.dataset.bsTarget;

  let updatedTargetValue = `${targetValue}_${index}`;
  button.dataset.bsTarget = updatedTargetValue;
});

section2Buttons.forEach(function (id, index) {
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
  button.addEventListener("click", function () {
    modalHeader.innerText = this.title;
    modal.style.display = "block";
  });
});

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// ======== model video start==========//

const videoIds = ["L3yxeO6ZWxs", "mqOXHszMIbs", "1qDdXFvV4IU"];

// Array to store YouTube video links
const videoLinks = videoIds.map(videoId => `https://www.youtube.com/embed/${videoId}?rel=0`);

// Get all thumbnail elements
const thumbnails = document.querySelectorAll('.modal-btn-video');
var modalVideo = document.getElementById("myModalVideo");
var buttonsVideo = document.querySelectorAll('.modal-btn-video');
// var spanVideo = document.querySelector(".close-video");

// Add click event listeners to each thumbnail
thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener('click', function () {
    const videoLink = videoLinks[index];
    this.setAttribute('data-video', videoLink);
    openVideoModal(videoLink);
  });
});

// Function to open the video modal
function openVideoModal(videoLink) {
  const videoIframe = document.getElementById('video-iframe');
  videoIframe.src = videoLink;
}

buttonsVideo.forEach(button => {
  button.addEventListener("click", function () {
    modalVideo.style.display = "block";
  });
});

// spanVideo.onclick = function() {
//     closeModal('myModalVideo');
//     stopVideo();
// }

window.onclick = function (event) {
  if (event.target == modalVideo) {
    modalVideo.style.display = "none";
  }
}

function closeModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "none";
  stopVideo();
}

function stopVideo() {
  var videoIframe = document.querySelector("#video-iframe");
  if (videoIframe) {
    var videoSrc = videoIframe.src;
    videoIframe.src = '';
    videoIframe.src = videoSrc;
  }
}
// ======== model video end==========//

//remove # from url
var links = document.querySelectorAll("a");
links.forEach(elem => {
  let elemAttr = elem.getAttribute('href');
  if (elemAttr && elemAttr.includes("#")) {
    elem.addEventListener("click", function (e) {
      e.preventDefault();
      document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
        behavior: "smooth",
        block: "start",
        inline: "nearest"
      });
    })
  }
})

const summaries = document.querySelectorAll('.summary,.gladiators-item p.desc');
summaries.forEach((elem) => {
  const fullText = elem.textContent.trim();
  const truncatedText = fullText.substring(0, 200);
  const hiddenText = fullText.substring(200);

  elem.innerHTML = `${truncatedText}<span class="dots">...</span><span class="hidden-text">${hiddenText}</span> <span class="read-more">Read More</span>`;

  const readMoreButton = elem.querySelector('.read-more');
  readMoreButton.addEventListener('click', function () {
    const moreText = elem.querySelector('.hidden-text');
    const dots = elem.querySelector('.dots');

    if (moreText.style.display === 'none' || moreText.style.display === '') {
      moreText.style.display = 'inline';
      dots.style.display = 'none';
      this.textContent = 'Read Less';
    } else {
      moreText.style.display = 'none';
      dots.style.display = 'inline';
      this.textContent = 'Read More';
    }
  });
});

// Select all elements with the class .faq-content
const faqItems = document.querySelectorAll('.faq-wrapper .faq-item .faq-content');

// Loop through each element
faqItems.forEach(item => {
  // Check the height of the element
  if (item.scrollHeight > 400) {
    // Apply the CSS styles if the height is greater than 400
    item.style.height = '400px';
    item.style.overflowY = 'scroll';
  }
});