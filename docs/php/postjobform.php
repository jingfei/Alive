<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}

  if($_SERVER[REQUEST_METHOD]== POST){
    $sess = $_SESSION['id'];
    $job_name = handlename($_POST["job_name"]);
    $age_requirement = handlename($_POST["age_requirement"]);
    $org_name= handlename($_POST["org_name"]);
    $address= handlename($_POST["address"]);
    $time= handlename($_POST["time"]);
    $phone_number= handlename($_POST["phone_number"]);
    $website= handlename($_POST["website"]);
    $job_description= handlename($_POST["job_description"]);

    if(empty($job_name) || empty($age_requirement) || empty($time) || empty($org_name) ||empty($address) ||empty($phone_number) ||empty($job_description)){
      echo '<script>alert("please fill in the information");</script>';
    }
    else {
      $sql= "SELECT * FROM jobs";
      $result=$conn->query($sql);
      $num = $result->num_rows;
      $path = $sess . "_" . $num . ".jpg";
      /* upload image*/
      $target_dir="./User-image/";
      $target_file = $target_dir . $path;
      $uploadOk = 1;
      $filename = $target_dir . "test.txt";
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false){
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "<script>alert(File is not an image.);</script>";
        $uploadOk = 0;
      }
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
          $sql="INSERT INTO jobs (userid, job_name,age_requirement,org_name,time,address,phone_number,website,job_description,path) VALUES($sess,'$job_name','$age_requirement','$org_name','$address','$time','$phone_number','$website','$job_description','$path');";
          $conn->query($sql);
          echo '<script>alert("Success!"); location.href="profile";</script>';
        } else {
          echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
      }
  }

}
?>
