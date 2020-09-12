//lightbox



//close lightbox xhen click to close icon

const closelightbox=document.querySelector(".close-lightbox");
const lightbox=document.querySelector(".lightbox");
//change img src
const lightboxImage=lightbox.querySelector("img");

// close lightbox by clicking btn close
closelightbox.addEventListener("click",function(){
  lightbox.classList.remove("show");
  lightbox.classList.add("hide");

})

const gallery=document.querySelector(".portfolio-container");
const galleryItem=document.querySelectorAll(".portfolio-item");
//console.log(galleryItem);
galleryItem.forEach(function(element){
   //console.log(element.querySelector(".icofont-plus"));
     element.querySelector(".icofont-plus").addEventListener("click",function(){
        // console.log(this);
       lightbox.classList.remove("hide");
       lightbox.classList.add("show");
       //change img src
       //console.log(element.querySelector("img").getAttribute("src"));
      lightboxImage.src=element.querySelector("img").getAttribute("src")
     })
   })
