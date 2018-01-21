//Problem: It look gross in smaller browser widths and small devices
//Solution: To hide the text links and swap them out with a more appropriate navigation

$(window).resize(function(){
  var h = $(window).innerHeight();
  var w = $(window).innerWidth();

  if(w > 981) {
      $('#sideNav').show();
      $('.sideNav-header').show();
      $('#sideNav').css("margin-top", "0");
  }else{
      $('#sideNav').hide();
  }
});  


$('.mobile-menu-button').click(function(){
  $('.sideNav-header').hide();
  var $header_height = $('#global-header').css("height");
  if($header_height == "150px"){
    $('#sideNav').css("margin-top", "150px");
    $('.admin-bar').css("margin-top", "196px");
  }else{
    $('#sideNav').css("margin-top", "160px");
    $('.admin-bar').css("margin-top", "166px");
  }
  $('#sideNav').toggle("slide");
});  

  $( window ).scroll(function() {
    var h = $(window).innerHeight();
    var w = $(window).innerWidth();
    if(w < 981){
      $('#sideNav').hide();
    }
});





