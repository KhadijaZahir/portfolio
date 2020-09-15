//Toggle
const hamBurger=document.querySelector(".hamburger");
 hamBurger.addEventListener("click",function(){
   document.querySelector("#sidebarMenu").classList.add("show");
 })


//crud edit

const btnEditt=document.querySelector(".edit");
 btnEditt.addEventListener("click",function(){
   document.querySelector("#modal").classList.add("show");

 })
