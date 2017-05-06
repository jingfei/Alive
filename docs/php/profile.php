<?php
@include "db.php";
$sess=$_SESSION['id'];
$sql="SELECT * FROM users WHERE id=$sess";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}

$sql2="SELECT * FROM jobs WHERE userid=$sess";
$result2=$conn->query($sql2);

?>
