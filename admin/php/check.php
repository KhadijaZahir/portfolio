<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
include("../../include/db.php");
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $query="SELECT * FROM admin_users WHERE admin_email='$email' AND admin_pass='$password'";
    $run = mysqli_query($db,$query);
    $result = mysqli_fetch_array($run);
    if($result){
        $_SESSION['admin_id']=$result['admin_id'];
        $_SESSION['username']=$result['username'];
        header('location:../');
    }else{
        header('location:../login/?msg=iuser');
    }
}
