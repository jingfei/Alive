<?php
@include "db.php";

function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}
$search_result= handlename($_GET["jobid"]);
if($_SERVER[REQUEST_METHOD]=="GET" && strlen($search_result)>0) {
  $sql="SELECT * FROM jobs WHERE id=$search_result";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
  }
}
?>
