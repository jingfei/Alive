<?php
@include "db.php";
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/master
$sess = $_SESSION['id'];

if($_SERVER[REQUEST_METHOD]== POST){
  $firstname = handlename($_POST["firstname"]);
  $lastname = handlename($_POST["lastname"]);
  $phonenumber= handlename($_POST["phonenumber"]);
  $password= handlename($_POST["password"]);
  $confirmpassword= handlename($_POST["confirmpassword"]);
  if(empty($firstname) || empty($lastname)){
    echo '<script>alert("please fill in the information");</script>';
  }
  else if(empty($password)) {
    $sql="UPDATE users SET first_name='$firstname',last_name='$lastname',phone_number='$phonenumber' WHERE id=$sess";
    $conn->query($sql);
  }
  else {
    if($password!=$confirmpassword){
      echo '<script>alert("password does not match");</script>';
    }
    else{
    $sql="UPDATE users SET first_name='$firstname',last_name='$lastname',password='$password',phone_number='$phonenumber' WHERE id=$sess";
    $conn->query($sql);
  }
  }
}

$sql= "SELECT * FROM users WHERE id=$sess";
<<<<<<< HEAD
=======
$sql= "SELECT * FROM users";
>>>>>>> origin/master
=======
>>>>>>> origin/master
$result=$conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
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

>>>>>>> origin/master
=======
>>>>>>> origin/master
?>
