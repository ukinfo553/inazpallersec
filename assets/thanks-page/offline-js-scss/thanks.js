//@koala-prepend "../../js-offline/vendor/jquery.min.js";           

$(function() { 
   
   
   $('.new_tab .tab-links a, .tab_banner .tab-links a').on('click', function(e)  {        var currentAttrValue = $(this).attr('href');
  $(this).closest('.tabs').find('.tab-content div' + currentAttrValue).addClass('active').siblings().removeClass('active');
  $(this).parent('li').addClass('active').siblings().removeClass('active');
e.preventDefault();return false;    });



  $('.tab_head').on('click', function(e)  {   
 

 if($(this).closest('.tab').hasClass('active')){

$(this).closest('.tab').removeClass('active');

 }else{

   var currentAttrValue = '#'+$(this).closest('.tab').attr('id'); 
    var g_index=$(this).closest('.tab').index(); 
  $(this).closest('.tabs').find('.tab-content div' + currentAttrValue).addClass('active').siblings().removeClass('active');
  $(this).closest('.tabs').find( ".tab-links li" ).eq( g_index ).addClass('active').siblings().removeClass('active');
   $('html, body').animate({scrollTop: $(currentAttrValue).offset().top - 70}, 500);
}
e.preventDefault();return false;   

 });



 $( document ).on( 'click','.nav_button', function(  ) {
 $("#nav_button").toggleClass('show'); 


});


 
 
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
 
  
  

});;