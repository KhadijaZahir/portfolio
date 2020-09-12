<!--start Portfolio works-->
     <section class="portfolio section-bg" id="Portfolio">
         <div class="container">
            <div class="row">
                 <div class="section-title text-center">
                     <h1>My Works in Design</h1>
                 </div>
            </div>

            <div class="row">
              <?php
               $query5 = "SELECT * FROM portfolio";
               $runquery5= mysqli_query($db,$query5);
               while($data5=mysqli_fetch_array($runquery5)){
              ?>
                 <div class="portfolio-gallery">

                      <div class="item" data-id="<?=$data5['projectlink']?>">
                        <div class="inner">
                            <img src="front/img/<?=$data5['projectpic']?>" alt="">
                            <div class="overlay">
                               <span class="fa fa-plus"></span>
                              <h4><a href="<?=$data5['projectlink']?>" target="_blank"><?=$data5['projectname']?></a></h4>
                            </div>
                       </div>
                      </div>
               </div>
               <?php
               }
             ?>
         </div>
      </div>
</section>
<!--end copyright-->
     <!--start lightbox for gallery popup when clicked to plus icon to see img big-->

      <div class="lightbox hide">
           <span class="close-lightbox fa fa-close"></span>
           <img src="front/img/<?=$data5['projectpic']?>" alt="portfolio">
      </div>

     <!--end lightbox-->
