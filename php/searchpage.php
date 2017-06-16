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
} else {
  $sql="SELECT * from jobs";
  $search_result="All Results";
}
$result= $conn->query($sql);

function getJobs($result) {
  while($row=$result->fetch_assoc()){
    echo '<div class="col-sm-6 col-md-4" style="width:300px">
          <div class="thumbnail">
            <img src="'.$row["path"].'" alt="...">
            <div class="caption">
              <h3>Search Result: '.$row["job_name"].'</h3>
              <p>Job title: '.$row["job_name"].' </br> Age:'.$row["age_requirement"].'</br> Location: '.$row["address"].'</br></p>
              <p><a href="./detail.php?jobid='.$row["id"].'" class="btn btn-primary" role="button">Click For More Info</a> </p>
            </div>
          </div></div>';
  }
}

?>
