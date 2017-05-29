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
      $sql="INSERT INTO jobs (userid, job_name,age_requirement,org_name,time,address,phone_number,website,job_description) VALUES($sess,'$job_name','$age_requirement','$org_name','$address','$time','$phone_number','$website','$job_description');";
      $conn->query($sql);
      echo '<script>location.href="profile";</script>';
  }

}
?>
