var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.padding = "0 15px";
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      
      panel.style.padding = "15px 15px";
    } 
  });
}

//navbar fadedown animation
  //sticky header
  function sticky(){
    let a = document.querySelector('nav');
    if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
        a.classList.add('navfixed')
    }
    else{
      a.classList.remove('navfixed')
    }
  }
  window.addEventListener('scroll', sticky);

//footer fixed
  function Descktopsticky(){
    let a = document.querySelector('.footer-fixed');
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 && window.matchMedia("(min-width: 768px)").matches){
        a.style.display = "block"
    }
    else{
        a.style.display  = "none"
    }
  }
//mobile function
function Mobilesticky(){
    let a = document.querySelector('.footer-fixed');
    if(document.body.scrollTop > 700 || document.documentElement.scrollTop > 700){
      a.style.display = "block"
    }
    else{
      a.style.display  = "none"
    }
  }

  window.addEventListener('scroll', Descktopsticky);
  window.addEventListener('scroll', Mobilesticky);


  let mybutton = document.querySelector(".topupBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}