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

function getJobs() {
  while($row=$result2->fetch_assoc()) {
    echo '<tr onClick="location.href=\'detail?jobid='.$row["id"].'\';">
            <td>'.$row["job_name"].'</td>
            <td>'.$row["job_description"].'</td>
            <td>'.$row["org_name"].'</td>
            <td>'.$row["time"].'</td>
          </tr>';
  }
}

?>
