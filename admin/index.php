<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$query="SELECT * FROM personal_setup,aboutus_setup,admin_users";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>

    <!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- file css-->
    <link href="css/dashboard.css" rel="stylesheet">
    <!--ico font-->
    <link href="front/icofont/icofont.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary sticky-top flex-md-nowrap p-0">
          <!--$_session :set a session: way to store info in var to be used across multiple pages-->
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Hey, <?=$_SESSION['username']?></a>
          <!-- ======= Mobile nav toggle button ======= -->
          <div class="hamburger"><i class="icofont-navigation-menu"></i></div>

          <ul class=" px-3">
            <li class="nav-item text-nowrap list-unstyled mr-0">
              <a class="nav-link text-light" href="php/logout.php">Logout</a>
            </li>
          </ul>
   </nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-secondary">
          <span>Edit Portfolio</span>
          </h6>
          <li class="nav-item">
            <a class="nav-link" href="?edithome=true">
              Edit Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editabout=true">
              Edit About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editresume=true">
              Edit Resume
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editportfolio=true">
              Edit Portfolio
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../admin/">
              Contact me
              </a>
          </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-secondary">
          <span>Account Settings</span>
          <a class="d-flex align-items-center text-secondary">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="?editprofile=true">
              Edit Profile
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php
     if(isset($_GET['edithome'])){
     include('php/home.php');
     }else if(isset($_GET['editabout'])){
         include('php/about.php');
     }else if(isset($_GET['editresume'])){
       include('php/resume.php');
     }else if(isset($_GET['editportfolio'])){
      include('php/portfolio.php');
     }else if(isset($_GET['editprofile'])){
      ?>
        <h2>Edit Profile</h2>
    <?php
         if(isset($_GET['msg'])){

          if($_GET['msg']=='updated'){
              ?>
              <div class="alert alert-success text-center" role="alert">
              Successfully Updated !
        </div>
              <?php
          }
         }
        ?>
         <form method="post" action="php/uprofile.php">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ptitle">Name</label>
                            <input type="text" name="username" value="<?=$data['username']?>" class="form-control" id="ptitle" placeholder="username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="psubtitle">Password</label>
                            <input type="text" name="userpass" value="<?=$data['user_pass']?>" class="form-control" id="psubtitle" placeholder="Password">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="psubtitle">Email Id</label>
                            <input type="text" name="userid" value="<?=$data['user_id']?>" class="form-control" id="psubtitle" placeholder="email">
                        </div>
                     </div>
                     <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
         </form>
    <?php }else{
         include('php/welcome.php');
          } ?>

    </main>
  </div>
</div>

      <script src="./bootstrap/js/bootstrap.bundle.js"></script>
      <script src="./js/dashboard.js"></script>
</html>
