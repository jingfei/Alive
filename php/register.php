<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}

  if($_SERVER[REQUEST_METHOD]== POST){
    $firstname = handlename($_POST["firstname"]);
    $lastname = handlename($_POST["lastname"]);
    $email= handlename($_POST["email"]);
    $password= handlename($_POST["password"]);
    $phonenumber= handlename($_POST["phonenumber"]);
    $birthday= handlename($_POST["birthday"]);
    if(empty($firstname) || empty($lastname) || empty($email) ||empty($password) ||empty($birthday)){
      echo '<script>alert("please fill in the information");</script>';
    } else {
      $sql="INSERT INTO users (first_name,last_name,email,password,phone_number,birthday) VALUES('$firstname','$lastname','$email','$password','$phonenumber','$birthday');";
      $conn->query($sql);
    }
  }

?>
