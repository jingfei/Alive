<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}
$sess = $_SESSION['id'];

$sql= "SELECT * FROM users WHERE id=$sess";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}

if($_SERVER[REQUEST_METHOD]== POST){
  $firstname = handlename($_POST["firstname"]);
  $lastname = handlename($_POST["lastname"]);
  $phonenumber= handlename($_POST["phonenumber"]);
  $password= handlename($_POST["password"]);
  $confirmpassword= handlename($_POST["confirmpassword"]);
  if(empty($firstname) || empty($lastname)){
    echo '<script>alert("please fill in the information");</script>';
    echo '<script>location.href="profile";</script>';
  }
  else if(empty($password)) {
    $sql="UPDATE users SET first_name='$firstname',last_name='$lastname',phone_number='$phonenumber' WHERE id=$sess";
    $conn->query($sql);
  }
  else {
    if($password!=$confirmpassword){
      echo '<script>alert("password does not match");</script>';
      echo '<script>location.href="profile";</script>';
    }
    else{
      $sql="UPDATE users SET first_name='$firstname',last_name='$lastname',password='$password',phone_number='$phonenumber' WHERE id=$sess";
      $conn->query($sql);
    }
  }
  $sql= "SELECT * FROM users WHERE id=$sess";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $email = $row["email"];
  }
  /* upload image*/
  $target_dir="./User-image/";
  $target_file = $target_dir . $email . ".jpg";
  $uploadOk = 1;
  $filename = $target_dir . "test.txt";
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false){
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        $uploadOk = 0;
      }
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
      echo "<script>alert('Sorry, your file is too large.');</script>";
      $uploadOk = 0;
      }
    if ($uploadOk == 0) {
      echo "<script>alert('Sorry, your file was not uploaded.');</script>";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        ;
      } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
      }
    }
  }
  echo '<script>location.href="profile";</script>';
}
?>
