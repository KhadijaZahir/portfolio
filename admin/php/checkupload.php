<?php
function Upload($file,$dir){
   //  basename() function returns the filename from a path basename(path, suffix)
    //target_file specifies the path of the file to be uploaded
    //$_FILES["$file"]["name"] originaly name on client machine
  // $_FILES["$file"]["tmp_name"]) TEMPORARY NAME when is stored on server
//$_FILES var of upload
    $target_file = $dir . basename($_FILES["$file"]["name"]);
 //$uploadOk = 1 not used yet will be used later
    $uploadOk = 1;
    //PATHINFO_EXTENSION - return only extension
    //pathinfo () Get information about a file path
    //imageFileType: hold the file extension of the file
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["$file"]["tmp_name"]);
  if($check !== false) {
//   "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
//    File is not an image.";
    $uploadOk = 0;
  }

// Check file size
      if ($_FILES["$file"]["size"] > 2000000) {
      //  echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
      //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

    // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        return "error";
      // if everything is ok, try to upload file
      } else {
        //move_uploaded_file() move file uploaded

        if (move_uploaded_file($_FILES["$file"]["tmp_name"], $target_file)) {
      //    echo "The file ". basename( $_FILES["$file"]["name"]). " has been uploaded.";
        } else {
      //    echo "Sorry, there was an error uploading your file.";
        }
      }
}
