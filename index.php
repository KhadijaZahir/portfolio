<?php include('./include/db.php');
$query = "SELECT * FROM portfolio";
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
    <link href="front/img/Mylogo_white.png" rel="icon">

    <title>Portfolio - khadija zahir</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- bootstrap CSS-->

    <link href="front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--ico font-->
    <link href="front/icofont/icofont.min.css" rel="stylesheet">
    <!-- Main css File -->

    <link href="front/css/style.css" rel="stylesheet">
    <style>
      #hero{
     background-image: url(front/img/IMG_20200215_192905_9.jpg);
   }
   #hero p {
     margin-bottom: 0px;
   }
   .main-menu .profile img {
     margin: 20px auto;
     width: 150px;
     border:none;
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
                <img src="front/img/FIRSTLOGO.png" alt="" class="img-fluid rounded-circle">
            </div>

            <!--bloc nav menu-->
            <nav class="nav-menu">
                <ul>
                     <li><a href="#hero"><i class="icofont-home"></i>Home</a></li>
                    <li><a href="#about"><i class="icofont-user"></i>About</a></li>
                    <li><a href="#resume"><i class="icofont-folder"></i>Resume</a></li>
                    <li><a href="#Portfolio"><i class="icofont-book"></i> Portfolio</a></li>
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
            <h1>I'm khadija zahir</h1>
            <p><span>Web Developer</span></p>
            <p><span>Graphic designer</span></p>
            <p><span>Photographer</span></p>
            <p><span>Videomaker</span></p>

        </div>
    </section>
    <!-- ============ End Hero =================-->



        <!-- ========================= About Section ======================= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                        <h2>About Me</h2>
                      <!--  <p>Some info about me </p>-->
                </div>

                <div class="row">
                        <div class="col-lg-4">
                            <img src="front/img/SPAC.jpg" class="img-fluid" alt="my image">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <h3>Graphic Designer and Web Developer</h3>
                            <p class="font-italic">
                                I m web developer and so fascinated by Graphic Design, Crafting, Photography, Art ...
                            </p>
                            <div>
                                <ul class="row">
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> 14 July</li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Email :</strong> zahir.khadija.yc@gmail.com</li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> 0600000000</li>
                                    <li class="col-lg-8"><i class="icofont-rounded-right"></i> <strong>Location :</strong> Morocco</li>
                                </ul>
                            </div>
                            <p>Student at Youcode school based in Youssofia Morocco</p>
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

                                <div class="progress col-lg-6">
                                      <span class="skill">HTML/CSS/SASS<i class="val">90%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>
                                <div class="progress col-lg-6">
                                      <span class="skill">JS<i class="val">50%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>
                                <div class="progress col-lg-6">
                                      <span class="skill">bootstrap<i class="val">50%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>

                                <div class="progress col-lg-6">
                                      <span class="skill">WordPress<i class="val">90%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                              </div>

                                <div class="progress col-lg-6">
                                      <span class="skill">PHP<i class="val">50%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>
                                <div class="progress col-lg-6">
                                      <span class="skill">Illustrator<i class="val">50%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>
                                <div class="progress col-lg-6">
                                      <span class="skill">Premiere Pro<i class="val">50%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>
                                <div class="progress col-lg-6">
                                      <span class="skill">Photoshop<i class="val">90%</i></span>
                                      <div class="progress-bar-wrap">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                </div>

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

                              <div class="resume-item">
                                    <h4>TRAINING AS DEVELOPER WORDPRESS</h4>
                                    <h5>07/2020 - 09/2020</h5>
                                    <p>ReWeb Agency</p>
                                    <p>Une agence web à rabat</p>
                              </div>
                              <div class="resume-item">
                                    <h4>TRAINING AS WEB DEVELOPER AND DESIGNER</h4>
                                    <h5>05/2020 - 08/2020</h5>
                                    <p>Project KolnaExplorer</p>
                                    <p>Project of making a website for an association of hiking</p>
                              </div>

                        </div>

                        <div class="col-lg-6">
                            <h3 class="resume-title">Education</h3>

                            <div class="resume-item">
                                <h4>WEB DEVELOPER</h4>
                                <h5>2019 -2021</h5>
                                <p><em>Youcode</em></p>
                                <p>school of web developement in Youssofia</p>
                            </div>
                            <div class="resume-item">
                                <h4>MATER'S DEGREE</h4>
                                <h5>2014</h5>
                                <p><em>FST</em></p>
                                <p>Master in biotechnplogy</p>
                            </div>
                            <div class="resume-item">
                                <h4>BACHELER'S DEGREE</h4>
                                <h5>2013</h5>
                                <p><em>Morocco</em></p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <!-- ====== End Resume Section ====== -->


        <!-- ======= Portfolio Section ======= -->

             <section class="portfolio section-bg" id="Portfolio">
                 <div class="container">
                    <div class="row">
                         <div class="section-title">
                             <h2>My Portfolio</h2>
                         </div>
                    </div>

                    <div class="row portfolio-container">
                      <?php
                       $query5 = "SELECT * FROM portfolio";
                       $runquery5= mysqli_query($db,$query5);
                       while($data5=mysqli_fetch_array($runquery5)){
                      ?>

                              <div class="col-lg-4 col-md-6 portfolio-item">
                                <div class="inner">
                                    <img src="front/img/<?=$data5['projectpic']?>" alt="">
                                    <div class="overlay">
                                       <span class="icofont icofont-plus"></span>
                                      <h4><a href="<?=$data5['projectlink']?>" target="_blank"><?=$data5['projectname']?></a></h4>
                                    </div>
                               </div>
                              </div>
                       <?php
                       }
                     ?>
                 </div>
              </div>
        </section>
             <!--start lightbox for gallery popup when clicked to plus icon to see img big-->

              <div class="lightbox hide">
                   <span class="close-lightbox icofont icofont-close"></span>
                   <img src="front/img/<?=$data5['projectpic']?>" alt="portfolio">
              </div>

             <!--end lightbox-->

        <!-- ======= Portfolio Section ======= -->



        <!-- ======= Contact Section ======= -->


        <?php include'./front/contactForm.php' ?>

        <!-- ===== End Contact Section ====== -->



    <!-- ======= Footer ======= -->
    <footer id="footer">
                Developed by <a href="#about">Khadija zahir</a>
                <div class="social-links mt-4 text-center">
                    <a href="https://www.twitter.com/"><i class="icofont-twitter"></i></a>
                    <a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="icofont-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/khadija-zahir-97524b19a/"><i class="icofont-linkedin"></i></a>
                    <a href="https://github.com/KhadijaZahir/portfolio"><i class="icofont-github"></i></a>

                </div>
    </footer>

    <!-- ===== End  Footer ===== -->
    <!-- Back to top button -->
    <a href="#hero" class="back-to-top"><i class="icofont-simple-up"></i></a>
  </main><!-- End #main -->


    <script src="front/js/toggle.js"></script>
    <script src="front/js/script.js"></script>



</body>

</html>
