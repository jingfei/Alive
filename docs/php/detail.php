<?php
@include "db.php";
$sess=$_SESSION['id'];
$sql="SELECT * FROM jobs WHERE userid=$sess";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}
?>
