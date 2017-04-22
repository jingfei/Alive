<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}
  $sess = $_SESSION['id'];
  if($_SERVER[REQUEST_METHOD]== POST){
    $job_name = handlename($_POST["job_name"]);
    $age_requirement = handlename($_POST["age_requirement"]);
    $address= handlename($_POST["address"]);
    $time= handlename($_POST["time"]);
    $phone_number= handlename($_POST["phone_number"]);
    $website= handlename($_POST["website"]);
    $job_description= handlename($_POST["job_description"]);

      $sql="UPDATE jobs SET job_name='$job_name',age_requirement='$age_requirement',time='$time',address='$address',phone_number='$phone_number',website='$website',job_description='$job_description' WHERE userid=$sess";
      $conn->query($sql);
}

@include "db.php";
$sql="SELECT * FROM jobs WHERE userid=$sess";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}
?>
