<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$query="SELECT * FROM portfolio,admin_users";
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
    <link href="icofont/icofont.min.css" rel="stylesheet">

  </head>
  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <div class="hamburger"><i class="icofont-navigation-menu"></i></div>

    <nav class="navbar bg-dark sticky-top flex-md-nowrap p-0">
          <!--$_session :set a session: way to store info in var to be used across multiple pages-->
          <a class="nav-link text-light col-md-3 col-lg-2" href="#">Hey, <?=$_SESSION['username']?></a>

          <ul>
            <li class="list-unstyled mr-0">
              <a class="nav-link text-light" href="php/logout.php">Logout</a>
            </li>
          </ul>
   </nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary pt-4">
      <div>
        <ul class="nav flex-column">
              <li>
                <a class="nav-link text-light" href="?editportfolio=true">
                  Edit Portfolio
                </a>
              </li>
              <li>
                  <a class="nav-link text-light" href="../admin/">
                  Contact me
                  </a>
              </li>
              <li>
                <a class="nav-link text-light" href="?editprofile=true">
                  Edit Profile
                </a>
              </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php
     if(isset($_GET['editportfolio'])){
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
                            <input type="text" name="userpass" value="<?=$data['admin_pass']?>" class="form-control" id="psubtitle" placeholder="Password">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="psubtitle">Email Id</label>
                            <input type="text" name="userid" value="<?=$data['admin_email']?>" class="form-control" id="psubtitle" placeholder="email">
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
      <script src="front/js/toggle.js"></script>

</html>
