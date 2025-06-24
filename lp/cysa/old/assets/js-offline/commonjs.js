//@koala-prepend "vendor/jquery.min.js"; 
//@koala-prepend "vendor/owl.carousel2.min.js";
//@koala-prepend "vendor/lazyload.min.js";
//@koala-prepend "vendor/wow.min.js";
//@koala-prepend "vendor/modernizr.js";    

  
 function val_demo_request()
 {
  var g_form=jQuery('#demo_contact_f');
 var newCustomerForm = g_form.serialize();
 
 var nameError;
 var hasError=false;
var error="<div class='alert-danger p-3 rows'><p>Please, fill in the following fields:</p><ul class='rows'>";
 var emfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 
if(jQuery('#me_name').val()== '') {
   error+= '<li>Enter your name.</li>';
 hasError = true;
 } 
  
if( jQuery('#me_email').val()== '') { 
  error+= '<li>Enter your email address.</li>';
 hasError = true;
 } else if (!emfilter.test(jQuery('#me_email').val())) {
error+= '<li>You entered an invalid email address.</li>';
 hasError = true;
 }  

 
 if(jQuery('#me_phone').val()== '' ) {
  error+= '<li>Enter your phone Number.</li>';
 hasError = true;
 }  
 if(jQuery('#me_country').val()== '' ) {
  error+= '<li>Select your country.</li>';
 hasError = true;
 }  

 

 if(jQuery('#me_message').val()== '' ) {
  error+= '<li>Enter a message.</li>';
 hasError = true;
 }  
 

 error+= '</ul></div>'; 

 if(hasError) { 
  
jQuery("#demo_form_output").removeClass('hide').html(error);
 }
 else
 {

  jQuery("#demo_form_output").addClass('hide').html('');
  jQuery("#btn_submit").prop('disabled', true);

 
jQuery.ajax({
 type:"POST",
 url: "send-ajax.php",  
 data: newCustomerForm,
 success:function(data){ 
//var result =jQuery(data).filter('.alert-success').html();
window.location.href = $('#me_redirect').val(); //Will take you to Google.
 jQuery("#demo_form_output").removeClass('hide').html(data);
if(typeof result == "undefined"){
 
}else{
  jQuery("#btn_submit").prop('disabled', false);
 jQuery("#me_name, #me_email, #me_phone, #me_company, #me_message").val('');
}
 
 
 },
 error: function(errorThrown){
  jQuery("#btn_submit").prop('disabled', false);
 alert(errorThrown);
 }
 });

 }

 
 
return false;

 } 
$(function() { 
  

   $('.new_tab .tab-links a, .tab_banner .tab-links a').on('click', function(e)  {        var currentAttrValue = $(this).attr('href');
  $(this).closest('.tabs').find('.tab-content div' + currentAttrValue).fadeIn(400).siblings().hide(); 
  $(this).parent('li').addClass('active').siblings().removeClass('active');
e.preventDefault();return false;    });



 $( document ).on( 'click','.nav_button', function(  ) {
 $("#nav_button").toggleClass('show'); 


});


$(".lazy").lazyload();
 
 $( document ).on( 'click','.nav_form a', function(  ) {
 var types=$(this).attr('data-types');
  
 $(this).closest('.nav_form').find('li').removeClass('active');
if(types=="individual"){
$("#for_corporate").addClass('hide');
$("#get_types").val('individual'); 
 $(this).closest('li').addClass('active');
 }else{
$("#for_corporate").removeClass('hide');
$("#get_types").val('corporate');
 $(this).closest('li').addClass('active');
 }


return false;

  });


$( document ).on( 'click','.popup_button', function(  ) {
 $($(this).attr('data-target')).addClass('show');
return false;

  });



$( document ).on( 'click','.modal .modal-header .close, .modal-backdrop', function(  ) {

 $(this).closest('.modal').removeClass('show');
return false;
  });


 $('.ap_wrap > h5.ap_title, .ap_wrap > h5').click(function (){  
if($(this).closest('.ap_wrap').hasClass('active') || $(this).closest('.ap_wrap').hasClass('active')){
  $(this).closest('.ap_wrap').removeClass('active'); 
  $(this).closest('.ap_wrap').find('.ap_content').slideUp();
  $(this).closest('.ap_wrap').removeClass('active');
}else{  
$(this).closest('.ap_wrap').addClass('active');
$(this).closest('.ap_wrap').find('.ap_content').slideDown();
}
   
  return false;
});
 
 $('.href_toscroll').on('click', function() {  
    $('html, body').animate({scrollTop: $(this.hash).offset().top - 100}, 500);
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
      $('.footer-fixed').addClass('active');
    } else {
      $('.footer-fixed').removeClass('active');
    }
  });

});;