<?php
@include "db.php";
$sql="SELECT * FROM users";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}
?>
