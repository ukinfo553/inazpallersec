function openTab(evt, cityName) {
    var i, auditorItem, tablinks;
    auditorItem = document.getElementsByClassName("auditorItem");
    for (i = 0; i < auditorItem.length; i++) {
      auditorItem[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" activeActive", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activeActive";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  //sticky header
function sticky(){
  let a = document.querySelector('.scrollNav');
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      a.classList.remove('d-none')
  }
  else{
    a.classList.add('d-none')
  }
}
window.addEventListener('scroll', sticky);

//table data get start
let tranbtn = document.querySelectorAll('.training_cal_courses');

tranbtn.forEach(element => {
  element.addEventListener("click", function(){
    let a = element.getAttribute('data-text');
    let b = document.querySelector('.hidden').value = a;
  })
});
//table data get end

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