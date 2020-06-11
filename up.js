$(document).ready(function(){

   $('.ir-arriba').click(function(){
   	 $('body, html').animate({
   	 	scrollTop: '0px'
   	 }, 300);
   });
   $(window).scrollTop(function(){
   	if ( $(this).scrollTop() > 0 ){
   		$('.ir-arriba').slideDown(300);
   	 }else {
   	 	$('.ir-arriba').slideUP(300);
   	 }
   });
});