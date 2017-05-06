<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}
$search_result= handlename($_GET["searchvalue"]);

if($_SERVER[REQUEST_METHOD]=="GET" && strlen($search_result)>0){
  $sql="SELECT * from jobs WHERE job_name LIKE '%$search_result%' or job_description LIKE '%$search_result%'";
}
else {
$sql="SELECT * from jobs";
}
$result= $conn->query($sql);
?>
