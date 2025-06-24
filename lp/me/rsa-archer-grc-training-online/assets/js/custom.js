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
  var inputElements = document.getElementById('me_others_pop');
  // Function to open the modal and set values
  function openModal(button) {
    const modalTitle = button.getAttribute('modal-title');       // Get the title of the modal
    const dynamicBtnTitle = button.getAttribute('data-text');       // Get the title of the button
    modalHeader.innerText = modalTitle;
    inputElements.value = modalTitle;
    modal.style.display = "block";
  }

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
  // ======= model end ========== //

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
  // reomve # from url end

  // When a link is clicked, dynamically adjust the padding and margin for the target section start
  const alinks = document.querySelectorAll('a[href^="#"]');
  alinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href'); // Get the target element's ID
      const targetElement = document.querySelector(targetId); // Find the target element
      const targetPosition = targetElement.offsetTop; // Get the target element's position from the top
      const navbarHeight = document.querySelector('.navbar').offsetHeight; // Get the height of the navbar
      const targetSection = targetPosition - navbarHeight; // Calculate the target section's position from the top
      window.scrollTo({
        top: targetSection,
        behavior: 'smooth'
      });
    });
  });
  // When a link is clicked, dynamically adjust the padding and margin for the target section end

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


  document.getElementById('playButton').addEventListener('click', function () {
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
  });

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
  const videoIds = ["hV7faGNme6A", "xYIMihmx4vc", "sGJMbna-P8s", "Y7CURes_Xl0"];

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

//---------- training calendar start --------------//

// Wait for the DOM to be ready before executing the script
const seatsLeftform = document.querySelectorAll(".seats-left");
document.addEventListener("DOMContentLoaded", async () => {
  // Fetch the calendar data
  const data = await fetchCalendarData();
  const calendar = document.querySelector(".available-batch");
  const seatsLeftHide = document.querySelector(".seats-left");
  const notavailableBatch = document.querySelector(".not-available-batch");
  const filteredData = data.filter(item => item.course_name !== "NoRecordFound");
  // console.log(filteredData === data);
  if (filteredData.length == 0) {
    seatsLeftform.forEach(element => {
      element.style.display = "none";
    });
    calendar.style.display = "none";
    seatsLeftHide.style.display = "none";
    notavailableBatch.classList.remove("d-none");
    notavailableBatch.classList.add("d-block");
  }
  // Populate the table with the fetched data
  populateTable(data);
});

// Fetch data from the API
async function fetchCalendarData() {
  try {
    const response = await fetch("https://azpirantz.com/registration/api/calander_list_bypostid.php?webpostid=" + apiId); //39518
    const data = await response.json();
    return data;
  } catch (error) {
    return []; // Return an empty array if there's an error
  }
}

// Populate the table with the fetched data
function populateTable(data) {
  const tbody = document.querySelector(".item-body table tbody"); // Ensure the correct selector

  tbody.innerHTML = ""; // Clear the table first

  data.forEach((item) => {
    const row = document.createElement("tr");
    row.classList.add("d-flex", "align-items-center", "flex-wrap", "flex-lg-nowrap");

    // Determine the button text and style based on the registration values
    let buttonText = "";
    let buttonStyle = "";
    let seatsLeft = item.max_registration - item.totalreg;
    if (item.totalreg === item.max_registration) {
      buttonText = "Batch Full";
      buttonStyle = "background-color:var(--disable-grey);color:var(--white);border-radius: 8px;border: none;cursor: not-allowed;opacity:0.7;font-size: 12px;text-transform: uppercase;font-weight: 700;";
    } else if (item.max_registration - item.totalreg <= 3) {
      buttonStyle = "background-color:var(--green);color:var(--white);border-radius: 8px;border: none;cursor: pointer;font-size: 12px;text-transform: uppercase;font-weight: 700;";
      buttonText = `${seatsLeft} Seats Left`;
    } else {
      buttonText = "Enroll Now"; // Default case
      buttonStyle = "background:var(--gradient-secondry);color:var(--white);border-radius: 8px;border: none;cursor: pointer;font-size: 12px;text-transform: uppercase;font-weight: 700;";
    }

    row.innerHTML = `
              <td data-label="Date">
                  ${item.bsd_nf_short} - ${item.bed_nf_short}
              </td>
              <td data-label="time">
                  ${item.slot_timing_start} - ${item.slot_timing_end} ${item.batch_timezone}
              </td>
              <td data-label="training-mode">
                  <button>${item.on_linesite}</button>
              </td>
              <td data-label="batch-type">${item.batch_type}</td>
              <td data-label="batch-status">
                  ${item.totalreg === item.max_registration
        ? `<button style="${buttonStyle}">
                          ${buttonText}
                      </button>`
        : `<button style="${buttonStyle}" class="batch-enroll" data-text="Request For Batch: ${item.coursename_crm} | ${item.bsd_nf_short} tp ${item.bed_nf_short}">
                          ${buttonText}
                      </button>`
      }
              </td>
          `;
    tbody.appendChild(row);
  });

  // Process the courses data
  let firstSkipped = false; // Flag to track if the first course has been skipped

  for (let i = 0; i < data.length; i++) {
    const course = data[i];
    //console.log(course);  // Log each course to see the data

    const seatsLeft = course.max_registration - course.totalreg;

    // If it's the first course and max_registration == totalreg, skip it and continue to the next course
    if (!firstSkipped && course.max_registration === course.totalreg) {
      firstSkipped = true;  // Mark the first course as skipped
      continue;  // Skip the first course and move to the second course
    }

    // Now process the current course (either first or second, etc.)
    seatsLeftform.forEach((seatsLeftform) => {
      if (seatsLeft <= 3) {
        seatsLeftform.innerHTML = `
              <span style="color: var(--green);">Next Batch: </span>
              ${course.bsd_nf_short}
              <span class="seats-left-ani" style="color: var(--danger);"> ${seatsLeft}</span>
              <span style="padding-right: 8px;">Seat(s) Left</span>
            `;
      } else {
        seatsLeftform.innerHTML = `
              <span style="color: var(--green);">Next Batch: </span>
              ${course.bsd_nf_short}
              <span class="seats-left-ani" style="color: var(--danger);"> 4</span>
              <span style="padding-right: 8px;">Seat(s) Left</span>
            `;
      }
    });

    // Flag as found (since we've processed this course)
    foundAvailableSeats = true;
    break
  }



  // If no available seats were found, display a message
  if (!foundAvailableSeats) {
    console.log("No courses with available seats found.");
  }

  // Now that the table is populated, add event listeners to the dynamically created buttons
  const dynamicButtons = document.querySelectorAll('.batch-enroll');
  // Get modal, buttons, and elements
  var modal = document.getElementById("myModal");
  var modalHeader = document.getElementById("modal-header");
  var span = document.querySelector(".close");
  var inputElement = document.getElementById('me_others_pop');

  // Function to open the modal and set values
  function openModal(button) {
    const dynamicBtnTitle = button.getAttribute('data-text');
    modalHeader.innerText = dynamicBtnTitle;                     // Set the modal header text
    inputElement.value = dynamicBtnTitle;             // Set the hidden input value
    modal.style.display = "block";                          // Show the modal
  }

  // Add event listeners to buttons
  dynamicButtons.forEach(button => {
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
}

//---------- training calendar end --------------//
