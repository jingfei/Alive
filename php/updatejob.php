<?php
@include "db.php";

function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}

$sess = $_SESSION['id'];
$search_result= handlename($_GET["jobid"]);
if($_SERVER[REQUEST_METHOD]=="GET" && strlen($search_result)>0) {
  $sql="SELECT * FROM jobs WHERE userid=$sess and id=$search_result";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
  }
}
if($_SERVER[REQUEST_METHOD]== "POST" && strlen($search_result)>0){
  $job_name = handlename($_POST["job_name"]);
  $age_requirement = handlename($_POST["age_requirement"]);
  $address= handlename($_POST["address"]);
  $time= handlename($_POST["time"]);
  $phone_number= handlename($_POST["phone_number"]);
  $website= handlename($_POST["website"]);
  $job_description= handlename($_POST["job_description"]);

  $sql = "UPDATE jobs SET job_name='$job_name',age_requirement='$age_requirement',time='$time',address='$address',phone_number='$phone_number',website='$website',job_description='$job_description' WHERE id=$search_result";
  $result=$conn->query($sql);
  echo '<script>alert("updated successfully");</script>';
  echo '<script>location.href="detail?jobid='.$search_result.'";</script>';
}

?>
