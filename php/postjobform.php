<?php
@include "db.php";
$sql="SELECT * FROM jobs";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}
?>
