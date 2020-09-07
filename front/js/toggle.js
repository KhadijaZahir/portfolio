//Toggle
const hamBurger=document.querySelector(".hamburger");
 hamBurger.addEventListener("click",function(){
   document.querySelector(".main-menu").classList.toggle("show");
 })


 // Back to top button

 var btn = $('.back-to-top');
/*
 $(window).scroll(function() {
   if ($(window).scrollTop() > 1500) {
     btn.addClass('show');
   } else {
     btn.removeClass('show');
   }
 });
 */
btn.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '300');
});
