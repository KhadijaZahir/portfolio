<?php
include('../../include/db.php');
include('checkupload.php');
//collect value of field id
$id=$_POST['portfolio_id'];/* 13/9/20 $id=$_POST['id'];*/
$query="SELECT * FROM portfolio WHERE portfolio_id='$id'";/* 13/9/20 $query="SELECT * FROM portfolio WHERE id='$id'";*/

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
//target_dir specifies the directory where  the file is to be placed

$target_dir = "../../front/img/";

//update
        //$_POST used to collect val from html form using method POST
        //isset function permet de determiner si une var est bien define
        if(isset($_POST['pupdate'])){
           $projectpic=$_FILES['projectpic']['name'];
            if($projectpic==""){
                $projectpic=$data['projectpic'];
            }else{
                $pdone = Upload('projectpic',$target_dir);
            }


        $projectname=mysqli_real_escape_string($db,$_POST['projectname']);
        $projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);


              if($pdone=="error"){
                  header("location:../?edithome=true&msg=error");
              }else{
              // set : column=value && where: condition
              $query="UPDATE portfolio SET ";
              $query.="projectpic='$projectpic',";
              $query.="projectname='$projectname',";
              $query.="projectlink='$projectlink' WHERE portfolio_id='$id'";/* 13/9/20 $query.="projectlink='$projectlink' WHERE id='$id'";*/
              echo $query;
              $queryrun=mysqli_query($db,$query);
              if($queryrun){
                  header("location:../?editportfolio=true#done");
              }

              }

        }

//delete
if(isset($_GET['del'])){
    $id=$_GET['del'];
    //where :which row to remove data
    $query="DELETE FROM portfolio WHERE portfolio_id='$id'"; /* 13/9/20 $query="DELETE FROM portfolio WHERE id='$id'";*/
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editportfolio=true#done");
}
}

//add
        if(isset($_POST['addtoportfolio'])){
              $projectpic=$_FILES['projectpic']['name'];
              if($projectpic==""){
                  $projectpic=$data['projectpic'];
              }else{
                  $pdone = Upload('projectpic',$target_dir);
              }


              $projectname=mysqli_real_escape_string($db,$_POST['projectname']);
              $projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);


              if($pdone=="error"){
                  header("location:../?editportfolio=true&msg=error");
              }else{
              $query="INSERT INTO portfolio (projectname,projectpic,projectlink) ";
              $query.="VALUES ('$projectname','$projectpic','$projectlink')";
              $queryrun=mysqli_query($db,$query);
                  if($queryrun){
                      header("location:../?editportfolio=true&msg=updated");
                  }

              }

        }
