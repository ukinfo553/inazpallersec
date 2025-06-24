//=require ../../../../node_modules/jquery/dist/jquery.min.js
//=require ../../../../node_modules/bootstrap/dist/js/bootstrap.min.js   
//=require ../../../../node_modules/jquery-lazyload/jquery.lazyload.js 
//=require ../../../../node_modules/owl.carousel/dist/owl.carousel.min.js 
//=require ../../../../node_modules/wowjs/dist/wow.min.js    

function val_demo_request() {
    jQuery("#demo_contact_f").serialize();
    var e = !1,
        t = "<div class='alert-danger p-3 rows'><p>Please, fill in the following fields:</p><ul class='rows'>";
    if ("" == jQuery("#me_name").val() && (t += "<li>Enter your name.</li>", e = !0), "" == jQuery("#me_email").val() ? (t += "<li>Enter your email address.</li>", e = !0) : /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(jQuery("#me_email").val()) || (t += "<li>You entered an invalid email address.</li>", e = !0), 

         t += "</ul></div>", e) jQuery("#demo_form_output").removeClass("hide").html(t);
    else {
        jQuery("#demo_form_output").addClass("hide").html("");
        var n = jQuery("#me_submited").text();
        jQuery("#me_submited").text("Please Wait.."), jQuery("#me_submited").prop("disabled", !0), jQuery("#loading_w").removeClass("hide");
        var i = {};
        i.me_others = jQuery("#me_others").val(),i.me_name = jQuery("#me_name").val(), i.me_email = jQuery("#me_email").val(), i.me_phone = jQuery("#me_phone").val(), i.me_country = jQuery("#me_country").val(), i.me_message = jQuery("#me_message").val(), i.me_submited = jQuery("#me_submited").val(), jQuery.ajax({
            type: "POST",
            url: "send-ajax.php",
            data: i,
            success: function(e) {
                window.location.href = $("#me_redirect").val(), jQuery("#demo_form_output").removeClass("hide"), jQuery("#me_submited").prop("disabled", !1).text(n), jQuery("#me_name, #me_email, #me_phone, #me_company, #me_message").val(""), jQuery("#loading_w").addClass("hide")
            },
            error: function(e) {
                jQuery("#me_submited").prop("disabled", !1).text(n), jQuery("#loading_w").addClass("hide"), alert(e)
            }
        })
    }
    return !1
}
$(function() { 
 
 $(".lazy").lazyload(); 
//new WOW().init(); 

/* $(document).ready( function(){
  new WOW().init();  
  });*/
  $(".tablepress").addClass('table table-dark').removeClass('table-striped'); 
 

$(".training_cal_courses").click(function(){
    $("#me_others").val($(this).attr('data-text'));
  }); 
 

$('.navbar-nav .href_toscroll').on("click", function() {

 $('.navbar-nav .nav-item').removeClass('active');
 $(this).closest('.nav-item').addClass('active');
 
});


// $("#clients, #service, .owlCarousel").owlCarousel({
// margin:20,
// loop: true, 
// //autoplay: 5000,  
// autoplaySpeed : 1000, 
// paginationSpeed : 400,
// autoplayHoverPause : true, 
// lazyLoad: true,
// dots: false,
// nav: true,  
// navText: ["<img src='assets/img/arrow-left.png'>","<img src='assets/img/arrow.png'>"],
// responsive:{  
// 360:{items:1},
// 480:{items:1},
// 960:{items:3} }
// });  
 

 $('.profile_card_carousel').owlCarousel({
    loop:true,
    margin:10,
     nav:false,
     dots: false,
    navText: ["<img src='assets/image/arrow-l.png'>","<img src='assets/image/arrow-r.png'>"],
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});

 
 $('.owl-slid-a').owlCarousel({
    loop:true,
    margin:10,
     nav:true,
     dots:true,
    navText: ["<img src='assets/img/arrow-l.png'>","<img src='assets/img/arrow-r.png'>"],
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});


// $(".owl-slid-a").owlCarousel({
// margin: 10,
// loop: true, 
// //autoplay: 3000,  
// autoplaySpeed : 300, 
// paginationSpeed : 400,
// autoplayHoverPause : true, 
// lazyLoad: true,
// dots: true,
// nav: true, 
// items : 3,
// navText: ["<img src='assets/img/arrow-left.png'>","<img src='assets/img/arrow.png'>"],
// responsive:{  
// 360:{items:1},
// 480:{items:1},
// 960:{items:1} }
// }); 


 
 
 

 
$('.fixed_call').on('click', function() {  
   $('html, body').animate({scrollTop: $('#free_demo').offset().top - 150}, 500);
   return false;
});

$('.href_toscroll, .training_cal_courses').on('click', function() {  
   $('html, body').animate({scrollTop: $(this.hash).offset().top - 150}, 500);
   return false;
});

 

$('.bottom_to_top').click(function() {
$('html, body').animate({scrollTop: $( $.attr(this, 'href') ).offset().top-140}, 500);
return false;});

 
 //goto top
 $('.scrollToTop').click(function(event) {
   event.preventDefault();
   $('html, body').animate({
     scrollTop: $("body").offset().top
   }, 500);
 }); 

$(window).scroll(function(){  var TM = parseInt($(window).scrollTop());
     if(TM != 0)
     { 
     $('#header').addClass("fixed-top"); 
     $('.scrollToTop').fadeIn(); 
     }else{
      $('#header').removeClass("fixed-top");   
      $('.scrollToTop').fadeOut();           
     }
   });   


 // Scroll to top button appear
 $(document).on('scroll',function() {
   var scrollDistance = $(this).scrollTop();
 
   if (scrollDistance > 100) {
     $('#footr_last').addClass('active');
   } else {
     $('#footr_last').removeClass('active');
   }
 });

});





// $('.c_b').on('click', function() {  
// $('.c_active').removeClass('active');
//    $(this).addClass('active');
//    return false;
// });
;