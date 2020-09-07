<?php include('./include/db.php');
$query = "SELECT * FROM personal_setup,aboutus_setup,portfolio,resume,skills";
$runquery = mysqli_query($db,$query);
/*check connection related to security ==desbale directory listing and error reporting*/
if(!$db){
    header("location:index-2.html");
}
/*fetch data*/
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>khadija zahir</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- bootstrap CSS-->

    <link href="front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--ico font-->
    <link href="front/icofont/icofont.min.css" rel="stylesheet">
    <!-- Main css File -->

    <link href="front/css/style.css" rel="stylesheet">


    <!-- ======================================================================================== -->
  <style>

      #hero {   /*for changing bg of home by admin panel*/
          background: url(front/img/<?=$data['homewallpaper']?>);
      }

  </style>
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <div class="hamburger"><i class="icofont-navigation-menu"></i></div>
    <!-- ======= Header ======= -->
    <header id="header" class="main-menu">
        <div class="d-flex flex-column">

             <!--bloc profile of menu-->
            <div class="profile">
                <img src="front/img/<?=$data['profilepic']?>" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light text-center"><a href="#hero"><?=$data['name']?></a></h1>
                <div class="social-links mt-4 text-center">
                    <?php
        if($data['twitter']!=""){
            ?>
                    <a href="<?=$data['twitter']?>"><i class="icofont-twitter"></i></a>
                    <?php
        }
        if($data['facebook']!=""){
            ?>
                    <a href="<?=$data['facebook']?>"><i class="icofont-facebook"></i></a>
                    <?php
        }
      if($data['instagram']!=""){
            ?>
                    <a href="<?=$data['instagram']?>"><i class="icofont-instagram"></i></a>
                    <?php
        }
       if($data['skype']!=""){
            ?>
                    <a href="<?=$data['skype']?>"><i class="icofont-skype"></i></a>
                    <?php
        }
      if($data['linkedin']!=""){
            ?>
                    <a href="<?=$data['linkedin']?>"><i class="icofont-linkedin"></i></a>
                    <?php
        }
      if($data['github']!=""){
            ?>
                    <a href="<?=$data['github']?>"><i class="icofont-github"></i></a>
                    <?php
        }
        ?>
                </div>
            </div>

            <!--bloc nav menu-->
            <nav class="nav-menu">
                <ul>
                     <li><a href="#hero"><i class="icofont-home"></i>Home</a></li>
                    <li><a href="#about"><i class="icofont-user"></i>About</a></li>
                    <li><a href="#resume"><i class="icofont-folder"></i>Resume</a></li>
                    <li><a href="#portfolio"><i class="icofont-book"></i> Portfolio</a></li>
                    <li><a href=".\admin\login\index.php"><i class="icofont-key"></i> Login</a></li>
                    <li><a href="#contact"><i class="icofont-envelope"></i> Contact</a></li>


                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- ===== End Header ====== -->
    <main id="main"><!--position of all content according to main menu (header) exceptionly footer and hero setion-->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container">
            <h1>I'm <?=$data['name']?></h1>
            <p><span><?=$data['professions']?></span></p>
        </div>
    </section>
    <!-- ============ End Hero =================-->



        <!-- ========================= About Section ======================= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                        <h2>About Me</h2>
                        <p><?=$data['shortdesc']?></p>
                </div>

                <div class="row">
                        <div class="col-lg-4">
                            <img src="front/img/<?=$data['profilepic']?>" class="img-fluid" alt="my image">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <h3><?=$data['heading']?></h3>
                            <p class="font-italic">
                                <?=$data['subheading']?>
                            </p>
                            <div>
                                <ul class="row">
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> <?=$data['dob']?></li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Email :</strong> <?=$data['emailid']?></li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> <?=$data['mobile']?></li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Website :</strong> <?=$data['website']?></li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Location :</strong> <?=$data['location']?></li>
                                </ul>
                            </div>
                            <p><?=$data['longdesc']?></p>
                        </div>
                </div>
            </div>
        </section>
        <!-- ====== End About Section ====== -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>My Skills</h2>
                </div>

                <div class="row skills-content">
                          <div class="row col-lg-12">
                                      <?php
                                      $query3 = "SELECT * FROM skills";
                                      $runquery3= mysqli_query($db,$query3);
                                      while($data3=mysqli_fetch_array($runquery3)){
                                      ?>
                                <div class="progress col-lg-6">
                                      <span class="skill"><?=$data3['skill']?> <i class="val"><?=$data3['score']?>%</i></span>
                                      <div class="progress-bar-wrap">
                                          <!--  <div class="progress-bar" style="width: <?=$data3['score']?>%"></div>-->
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?=$data3['score']?>%" aria-valuenow="<?=$data3['score']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>
                                <?php
                                 }
                                ?>

                          </div>
                </div>
            </div>
        </section>

        <!--====== End Skills Section ====== -->



        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">
                    <div class="section-title">
                        <h2>Resume</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                                <h3 class="resume-title">Professional Experience</h3>
                                <?php
                                $query4 = "SELECT * FROM resume WHERE category='pe'";
                                $runquery4= mysqli_query($db,$query4);
                                while($data4=mysqli_fetch_array($runquery4)){
                                ?>
                              <div class="resume-item">
                                    <h4><?=$data4['title']?></h4>
                                    <h5><?=$data4['year']?></h5>
                                    <p><?=$data4['ogname']?></p>
                                    <p><?=$data4['workdesc']?></p>
                              </div>
                              <?php
                              }
                              ?>
                        </div>

                        <div class="col-lg-6">
                            <h3 class="resume-title">Education</h3>
                                  <?php
                                  $query4 = "SELECT * FROM resume WHERE category='e'";
                                  $runquery4= mysqli_query($db,$query4);
                                  while($data4=mysqli_fetch_array($runquery4)){
                                  ?>
                            <div class="resume-item">
                                <h4><?=$data4['title']?></h4>
                                <h5><?=$data4['year']?></h5>
                                <p><em><?=$data4['ogname']?></em></p>
                                <p><?=$data4['workdesc']?></p>
                            </div>
                            <?php
                              }
                             ?>
                        </div>
                    </div>
            </div>
        </section>

        <!-- ====== End Resume Section ====== -->

        <!-- ======= Portfolio Section ======= -->

                <section id="portfolio" class="portfolio section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Portfolio</h2>
                        </div>

                        <div class="row portfolio-container">
                                   <?php
                                    $query5 = "SELECT * FROM portfolio";
                                    $runquery5= mysqli_query($db,$query5);
                                    while($data5=mysqli_fetch_array($runquery5)){
                                   ?>
                                   <div class="col-lg-4 col-md-6 portfolio-item">
                                         <div class="portfolio-wrap">
                                               <img src="front/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
                                               <div class="portfolio-links" title="<?=$data5['projectname']?>">
                                                   <div class="overlay">
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


        <!-- ====== End Portfolio Section ====== -->


        <!-- ======= Contact Section ======= -->


        <?php include'./front/contactForm.php' ?>

        <!-- ===== End Contact Section ====== -->

      </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
                Developed by <a href="#about">Khadija zahir</a>
    </footer>

    <!-- ===== End  Footer ===== -->
    <!-- Back to top button -->
    <a href="#hero" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="front/js/toggle.js"></script>


</body>

</html>
