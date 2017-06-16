<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}

if($_SERVER[REQUEST_METHOD]== POST){
  $firstname = handlename($_POST["firstname"]);
  $lastname = handlename($_POST["lastname"]);
  $email= handlename($_POST["email"]);
  $password= handlename($_POST["password"]);
  $phonenumber= handlename($_POST["phonenumber"]);
  $birthday= handlename($_POST["birthday"]);
  if(empty($firstname) || empty($lastname) || empty($email) ||empty($password) ||empty($birthday)){
    echo '<script>alert("please fill in the information");</script>';
  } else {
    /* check email unique */
    $sql="SELECT * FROM users WHERE email='".$email."'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
      echo "<script>alert('This email had been used.');</script>";
    } else {
      /* upload image*/
      $target_dir="./User-image/";
      $target_file = $target_dir . $email . ".jpg";
      $uploadOk = 1;
      $filename = $target_dir . "test.txt";
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false){
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
      if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          $sql="INSERT INTO users (first_name,last_name,email,password,phone_number,birthday) VALUES('$firstname','$lastname','$email','$password','$phonenumber','$birthday');";
          $conn->query($sql);
          echo '<script>location.href="login";</script>';
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
  }
}

?>
