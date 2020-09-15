//lightbox
const lightbox=document.querySelector(".lightbox");
//show img by clicking on icon plus
const gallery=document.querySelector(".portfolio-container");
const galleryItem=document.querySelectorAll(".portfolio-item");

//close lightbox when click to close icon
const closelightbox=document.querySelector(".close-lightbox");
//change img src
const lightboxImage=lightbox.querySelector("img");

//show img by clicking on icon plus
galleryItem.forEach(function(item){
     item.querySelector(".icofont-plus").addEventListener("click",function(){
       lightbox.classList.remove("hide");
       lightbox.classList.add("show");
       //change img src
      lightboxImage.src=item.querySelector("img").getAttribute("src")
     })
   })

// close lightbox by clicking btn close
closelightbox.addEventListener("click",function(){
  lightbox.classList.remove("show");
  lightbox.classList.add("hide");
})
