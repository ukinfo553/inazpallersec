// swiper js cleint slider start
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 24,
  loop: true,
  autoplay: {
    delay: 2500, // Adjust delay as needed
    disableOnInteraction: false,
  },
  speed: 500,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1200: {
      slidesPerView: 9,
      spaceBetween: 50,
    },
  },
});


var myGladiators = new Swiper(".myGladiators", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop:false,
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
// swiper js client slider end

// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach(elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if (navMenu.classList.contains('open')) {
    navToggler.click();
  }
}

/////////// vetical tabs start ///////////////

// Select all tab buttons and content
// const tabButtons = document.querySelectorAll('.tab');
// const tabContents = document.querySelectorAll('.tab-content');

// // Add click event listener to each tab button
// tabButtons.forEach(button => {
//   button.addEventListener('click', () => {
//     // Remove active class from all buttons and contents
//     tabButtons.forEach(btn => btn.classList.remove('active'));
//     tabContents.forEach(content => content.classList.remove('active'));

//     // Add active class to the clicked button and corresponding content
//     button.classList.add('active');
//     const tabId = button.getAttribute('data-tab');
//     document.getElementById(tabId).classList.add('active');
//   });
// });


function setupTabsAndAccordion(tabButtonSelector, tabContentSelector, activeClass = 'active') {
  const tabButtons = document.querySelectorAll(tabButtonSelector);
  const tabContents = document.querySelectorAll(tabContentSelector);

  // Helper function to reset all tabs and contents
  function resetTabs() {
    tabButtons.forEach(btn => btn.classList.remove(activeClass));
    tabContents.forEach(content => content.classList.remove(activeClass));
  }

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Get the current tab/accordion ID from data-tab attribute
      const tabId = button.getAttribute('data-tab');

      // For mobile (accordion behavior)
      if (window.innerWidth < 768) {
        // Toggle the clicked content
        const content = [...tabContents].find(c => c.getAttribute('data-tab') === tabId);
        if (content.classList.contains(activeClass)) {
          content.classList.remove(activeClass);
          button.classList.remove(activeClass);
        } else {
          resetTabs();
          content.classList.add(activeClass);
          button.classList.add(activeClass);
        }
      } else {
        // For desktop (tab behavior)
        resetTabs();
        button.classList.add(activeClass);
        const content = [...tabContents].find(c => c.getAttribute('data-tab') === tabId);
        content.classList.add(activeClass);
      }
    });
  });
}

// Call the function for your specific tab groups
setupTabsAndAccordion('.vertical-tab-button', '.vertical-tab-content');
setupTabsAndAccordion('.why-tab', '.why-tab-content');


///////// vetical tabs start ///////////////