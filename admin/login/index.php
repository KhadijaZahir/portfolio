<?php
session_start();
if(isset($_SESSION['username'])){
   header('location:../');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center">
          <form class="form-signin" action="../php/check.php" method="post">
          <?php
//display message og logout and incorrect password and username
    if(isset($_GET['msg'])){

              if($_GET['msg']=='logout'){
            ?>
            <div class="alert alert-success text-center" role="alert">
                Logout Successfull !
            </div>
            <?php
             }
             if($_GET['msg']=='iuser'){
            ?>
            <div class="alert alert-danger text-center" role="alert">
            Incorrect Email/Password !
            </div>
            <?php
              }
  }
            ?>
        <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

        <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
        <p class="mt-5 mb-3">&copy; 2020</p>
      </form>
</body>
</html>
