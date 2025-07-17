// swiper js start
const clients = new Swiper('.clients', {
  slidesPerView: 4,
  spaceBetween: 16,
  loop: true,
  autoplay: true,
  pagination: {
    el: ".clients .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".clients .swiper-button-next",
    prevEl: ".clients .swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 6
    },
    1200: {
      slidesPerView: 8
    },
  },
});


const related_service = new Swiper('.related-service', {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: false,
  pagination: {
    el: ".related-service .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".related-service .swiper-button-next",
    prevEl: ".related-service .swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2
    },
    1200: {
      slidesPerView: 3
    },
  },
});


var myGladiators = new Swiper(".myGladiators", {
  slidesPerView: 1,
  spaceBetween: 16,
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
      spaceBetween: 24,
    }
  }
});
// swiper js client slider end
// Define variables for navigation toggler and menu
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');

// Event listener for toggler button
navToggler.addEventListener('click', function () {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
});




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

//////// select option color change function start ///////

const selectElement = document.querySelectorAll('.colorSelect');
selectElement.forEach(element => {
  element.addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    this.style.color = selectedOption.style.color || '#484848'; // Set text color based on selected option
    this.classList.remove('open'); // Remove red background on selection

    // Optional: Set default colors for options (not all browsers support this)
    Array.from(element.options).forEach(option => {
      if (option.value) {
        option.style.color = '#484848'; // Color for options
      }
    });
  });
});

//////// select option color change function start ///////

/////// testimonial read more start //////////////
const summaries = document.querySelectorAll('.gladiators-item p');
summaries.forEach((elem) => {
  const fullText = elem.textContent.trim();
  const truncatedText = fullText.substring(0, 400);
  const hiddenText = fullText.substring(400);

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
////// testimonial read more end //////////////

////// dropdown megamenu script start ////////
document.addEventListener("DOMContentLoaded", function () {
  const tabLinks = document.querySelectorAll('.megamenu-tab-link');
  const tabPanes = document.querySelectorAll('.megamenu-tab-pane');

  // Set the first tab and megamenu-tab-pane as active by default
  tabLinks[0].classList.add('active');
  tabPanes[0].style.display = 'block';

  tabLinks.forEach((tab, index) => {
    tab.addEventListener('mouseenter', function () {
      // Remove the 'active' class from all tabs
      tabLinks.forEach(link => link.classList.remove('active'));

      // Add the 'active' class to the current tab
      tab.classList.add('active');

      // Hide all tab content except the current one
      tabPanes.forEach((pane, paneIndex) => {
        if (paneIndex !== index) {
          pane.style.display = 'none';
        } else {
          pane.style.display = 'block';
        }
      });
    });
  });
});
///// dropdown megamenu script end ///////