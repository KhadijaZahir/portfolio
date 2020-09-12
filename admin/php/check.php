<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
include("../../include/db.php");
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    //$query : sql query to be exrecuted
    $query="SELECT * FROM admin_users WHERE user_email='$email' AND user_pass='$password'";
    //mysqli_query: used to execute sql queries (request)
    $run = mysqli_query($db,$query);
    //mysqli_fetch_array: fetch row array
    //$result: result returned by mysqli_query
    $result = mysqli_fetch_array($run);
    if($result){
        $_SESSION['id']=$result['id'];
        $_SESSION['username']=$result['username'];
        header('location:../');
    }else{
        header('location:../login/?msg=iuser');
    }
}
