<?php
function Upload($file,$dir){
    $target_file = $dir . basename($_FILES["$file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check file size
      if ($_FILES["$file"]["size"] > 2000000) {
        $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        $uploadOk = 0;
      }

    // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        return "error";
      // if everything is ok, try to upload file
      }else{
         move_uploaded_file($_FILES["$file"]["tmp_name"], $target_file);
      }
}
