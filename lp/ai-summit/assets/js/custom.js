// core js code start

document.addEventListener("DOMContentLoaded", function () {

  //navbar fixed
  // function scrollNavbar() {
  //   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
  //     document.querySelector(".navbar").classList.add("fixedNav");
  //   } else {
  //     document.querySelector(".navbar").classList.remove("fixedNav");
  //   }
  // }

  // window.addEventListener('scroll', scrollNavbar);


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


