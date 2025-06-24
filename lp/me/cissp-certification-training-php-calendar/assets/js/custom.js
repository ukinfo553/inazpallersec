var instructor = new Swiper(".myAdvisor", {
  slidesPerView: 1.1,
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
      slidesPerView: 2.2,
    },
    992: {
      slidesPerView: 3.3,
    }
  }
});

var myGladiators = new Swiper(".myGladiators", {
  slidesPerView: 1.1,
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
  keyboard: true,
  // Responsive breakpoints
  breakpoints: {
    768: {
      slidesPerView: 2.2,
    },
    992: {
      slidesPerView: 3.3,
    }
  }
});

var swiper = new Swiper(".mySwiper3", {
  spaceBetween: 10,
  slidesPerView: 4.4,
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



// core js code start

document.addEventListener("DOMContentLoaded", function () {

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
  const navbtnlinks = document.querySelectorAll('nav .nav-link');

  navbtnlinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
      // event.preventDefault();

      // Remove the 'active' class from all navbtnlinks
      navbtnlinks.forEach(function (link) {
        link.classList.remove('navactive');
      });

      // Add the 'active' class to the clicked link
      this.classList.add('navactive');

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


  // ======= model start ========== //
  // Get modal, buttons, and elements
  var modal = document.getElementById("myModal");
  var buttons = document.querySelectorAll('.modal-btn');
  var span = document.querySelector(".close");
  var modalHeader = document.getElementById("modal-header");
  var inputElement = document.getElementById('me_others_pop');
  var dynamcibutton = document.querySelectorAll('.href_toscroll')

  // Function to open the modal and set values
  function openModal(button) {
    const modalTitle = button.getAttribute('modal-title');
    const dynamicBtnTitle = button.getAttribute('data-text');       // Get the title of the button
    modalHeader.innerText = modalTitle;                     // Set the modal header text
    inputElement.value = modalTitle;
    inputElement.value = dynamicBtnTitle;             // Set the hidden input value
    modal.style.display = "block";                          // Show the modal
  }


  dynamcibutton.forEach(button => {
    button.addEventListener("click", function () {
      openModal(this);  // Open the modal with the correct title and input value
    });
  });

  // Add event listeners to buttons
  buttons.forEach(button => {
    button.addEventListener("click", function () {
      openModal(this);  // Open the modal with the correct title and input value
    });
  });

  // Close the modal when clicking on the close button
  span.onclick = function () {
    modal.style.display = "none";
  };

  // Close the modal when clicking anywhere outside of the modal
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

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


  function playVideo() {
    var videoContainer = document.getElementById('videoContainer');
    var overlay = document.getElementById('overlay');
    var playButton = document.getElementById('playButton');
    var youtubeVideo = document.getElementById('youtubeVideo');

    // Hide overlay and play button
    overlay.style.display = 'none';
    playButton.style.display = 'none';

    // Set the new YouTube video link
    var newVideoLink = 'https://www.youtube.com/embed/sLrcxlBQrXE?si?rel=0';

    // Update the src attribute of the YouTube video iframe
    youtubeVideo.src = newVideoLink;

    // Show YouTube video
    youtubeVideo.style.display = 'block';

    // Set autoplay and muted attributes to start playing the video
    youtubeVideo.setAttribute('autoplay', '1');
    youtubeVideo.setAttribute('muted', '1');
  }


  // accordin code script
  const accordionItems = document.querySelectorAll(".accordion-item");
  accordionItems.forEach(item => {
    const header = item.querySelector(".accordion-header");
    header.addEventListener("click", function () {
      const isOpen = item.classList.contains("open");

      // Close all accordion items
      accordionItems.forEach(innerItem => innerItem.classList.remove("open"));

      // If clicked item was not open, open it
      if (!isOpen) {
        item.classList.add("open");
      }
    });
  });
  /*===== add lozyloading attribute */
  const img = document.querySelectorAll('img');
  img.forEach(images => {
    images.setAttribute('loading', 'lazy');
  })
  /*===== add lozyloading attribute */


// ======== model video start==========//
const videoIds = ["gqgFTnO0DK0", "UGsaLJh9MwA", "MOpJx_39cKQ", "TdrUlwDjLiQ", "LOdX7sRjG9E"];

// Array to store YouTube video links
const videoLinks = videoIds.map(videoId => `https://www.youtube.com/embed/${videoId}?rel=0`);

// Get all thumbnail elements
const thumbnails = document.querySelectorAll('.modal-btn-video');
var modalVideo = document.getElementById("myModalVideo");
var buttonsVideo = document.querySelectorAll('.modal-btn-video');

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

// Function to close the modal and stop the video
function closeModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "none";
  stopVideo();
}

// Stop the video when the modal is closed
function stopVideo() {
  var videoIframe = document.querySelector("#video-iframe");
  if (videoIframe) {
    var videoSrc = videoIframe.src;
    videoIframe.src = ''; // Remove the source to stop the video
    videoIframe.src = videoSrc; // Reset the source to reload the video
  }
}

// Add click event listener to the close button
var closeBtn = document.querySelector(".close-video");
if (closeBtn) {
  closeBtn.addEventListener("click", function () {
    closeModal('myModalVideo');
  });
}

// Add event listener for the modal background click (to close the modal)
window.onclick = function (event) {
  if (event.target == modalVideo) {
    modalVideo.style.display = "none";
    stopVideo(); // Stop the video when the modal is closed by clicking outside
  }
}

// ======== model video end==========//
});
