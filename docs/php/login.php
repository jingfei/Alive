<?php
include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}

if($_SERVER[REQUEST_METHOD]==POST){
  $password = handlename($_POST["password"]);
  $email = handlename($_POST["Email"]);
  if (empty($password) ||empty($email)){
  echo '<script>alert("Please fill in the information");</script>';
  }
  else {
      $sql="SELECT * FROM users WHERE $email='email'";
      $result= $conn->query($sql);
      if($result->num_rows>0){
        $row = $result->fetch_assoc();
        echo $row[email];
      }
      else{
      echo '<script>alert("your password or email is incorrect")</script>';
      }

  }
}
?>
