function openNav() {
    document.getElementById("mySidenav").style.cssText = "height:auto;padding:45px 0;";
}
function closeNav() {
    document.getElementById("mySidenav").style.cssText = "height:0;padding:0;";
}

//fixed navbar code
function sticky(){
    let a = document.querySelector('.topNav');
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        a.classList.add('navFixed')
    }
    else{
      a.classList.remove('navFixed')
    }
  }
  window.addEventListener('scroll', sticky);

  //scroll btn
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//remove # from url

var links = document.querySelectorAll("a");
links.forEach(elem =>{
    let elemAttr = elem.getAttribute('href');
    if(elemAttr && elemAttr.includes("#")){
        elem.addEventListener("click", function(e){
            e.preventDefault();
            document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
            behavior: "smooth",
            block: "start",
            inline: "nearest"
            });
            })
    }
})

//accordian

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

//tree view
var toggler = document.getElementsByClassName("caret");
var it;

for (it = 0; it < toggler.length; it++) {
  toggler[it].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active-caret");
    this.classList.toggle("caret-down");
  });
}

//tab start

//nav enroll
function navEnroll(){
  let a = document.querySelector('nav .enroll');
  if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000  && window.matchMedia("(min-width: 768px)").matches){
      a.style.display = "block"
  }
  else{
    a.style.display = "none"
  }
}
window.addEventListener('scroll', navEnroll);