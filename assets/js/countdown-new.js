(function($)  {

  $.fn.countdown = function(options, callback) {
 
    var settings = { 'date': null }
    

    if (options) {
      $.extend(settings, options)
    }

    this_sel = $(this);

    function count_ecec() {



      eventDate = Date.parse(settings['date']) / 1000;
      currentDate = Math.floor( $.now() / 1000 );
 
      if (eventDate <= currentDate ) {
        callback.call(this); 
        clearInterval(interval);
       
      } 

      seconds = eventDate - currentDate;

      if (this_sel.find('.years').length > 0) {
        years = Math.floor( seconds / ( 60 * 60 * 24 * 365 ) );
        seconds -= years * 60 * 60 * 24 * 365  ;
      }

      if (this_sel.find('.days').length > 0) {
        days = Math.floor( seconds / ( 60 * 60 * 24 ) );
        seconds -= days * 60 * 60 * 24 ;
    }
    if (this_sel.find('.hours').length > 0) {
      hours = Math.floor( seconds / ( 60 * 60) );
      seconds -= hours * 60 * 60 ;
    }
    if (this_sel.find('.mins').length > 0) {
      minutes =  Math.floor( seconds / 60 );
      seconds -= minutes * 60 ;
    }


      if (this_sel.find('.years').length > 0) {
        years = (String(years).length < 2 ? '0'  + years : years);
      }

      if (this_sel.find('.days').length > 0) {
        days = (String(days).length < 2 ? '0'  + days : days);
      }
      if (this_sel.find('.hours').length > 0) {
      hours = (String(hours).length !==2 ? '0'  + hours : hours);
    }
    if (this_sel.find('.mins').length > 0) {
      minutes = (String(minutes).length !==2 ? '0'  + minutes : minutes);
    }
      seconds = (String(seconds).length !==2 ? '0'  + seconds : seconds);

      if (!isNaN(eventDate)) {
        if (this_sel.find('.years').length > 0) { 
          this_sel.find('.years').text(years); 
      }
      if (this_sel.find('.days').length > 0) {
       
        this_sel.find('.days').text(days);
      }
      if (this_sel.find('.hours').length > 0) {
       
        this_sel.find('.hours').text(hours);
      }
      if (this_sel.find('.mins').length > 0) {
        
        this_sel.find('.mins').text(minutes);
      }
        this_sel.find('.secs').text(seconds);
      }
 
if(years=="00"){this_sel.find('.years, .me_y').hide(); }else{
  this_sel.find('.years, .me_y').show();
}
if(days=="00"){this_sel.find('.days, .me_d').hide(); } else{
 this_sel.find('.days, .me_d').show(); 
}
 if(hours=="00"){this_sel.find('.hours, .me_h').hide(); }else{
 this_sel.find('.hours, .me_h').show(); 
}
/*if(minutes=="00"){this_sel.find('.mins, .me_m').hide(); }else{
 this_sel.find('.mins, .me_m').show(); 
}
if(seconds=="00"){this_sel.find('.mins, .me_s').hide(); }else{
this_sel.find('.mins, .me_s').show();  
}*/
    }

    count_ecec();
   var  interval = setInterval(count_ecec, 1000);


  }

}) (jQuery);

jQuery(document).ready(function($){ 

 setTimeout( function() {
   //mahendra
 
$('body').addClass('offer_on');
/*var endDate = $('#countdown').attr('data-time'); 
$('#countdown').countdown({date: endDate}, function() {        
          $('body').removeClass('offer_on');
        $('.counter_wrap').hide();       
});  */
 }, 4000 ); //4000  


 
 $(".close_counter").click(function(){
$('body').removeClass('offer_on');

 });

  $(".grab_now").click(function(){
//$('#popup_offer').addClass('active'); 
 }); 

 });  ;