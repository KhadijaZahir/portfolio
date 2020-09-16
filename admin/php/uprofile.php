<?php
session_start();
include('../../include/db.php');

if(isset($_POST['uprofile'])){
      $name=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['userpass']);
      $email=mysqli_real_escape_string($db,$_POST['userid']);
      $query="UPDATE admin_users SET ";
      $query.="username='$name',";
      $query.="admin_pass='$password',";
      $query.="admin_email='$email' WHERE 1";
      $queryrun=mysqli_query($db,$query);
      if($queryrun){
          $_SESSION['username']=$name;
          header("location:../?editprofile=true&msg=updated");
      }
}
