<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}
$sql= "SELECT * FROM users";
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
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
      $sql="UPDATE users SET (first_name,last_name,email,password,phone_number,birthday)=('$firstname','$lastname','$email','$password','$phonenumber','$birthday') WHERE id = '$userid';";
      $conn->query($sql);
    }
  }

?>
