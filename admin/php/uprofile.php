<?php
session_start();
include('../../include/db.php');

if(isset($_POST['uprofile'])){
     //escape special character to have valid sql request
    //mysqli_real_escape_string <==> sql: escaping data before using it in mysql "querie"
    //filter_var: filtring and validating input data
      $name=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['userpass']);
      $email=mysqli_real_escape_string($db,$_POST['userid']);
      $query="UPDATE admin_users SET ";
      $query.="username='$name',";
      $query.="user_pass='$password',";
      //WHERE 1 mean true or always true, used when biuld a client side query by
       //concatenating filtring condition
      $query.="user_email='$email' WHERE 1";
      echo $query;
      $queryrun=mysqli_query($db,$query);
      if($queryrun){
          $_SESSION['username']=$name;
          header("location:../?editprofile=true&msg=updated");
      }

}
