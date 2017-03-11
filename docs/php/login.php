<?php
function handlename($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  return $data;
}

if($_SERVER[REQUEST_METHOD]==POST){
  $password = handlename($_POST["password"]);
  $email = handlename($POST["email"]);
  if (empty($password) ||empty($email)){
  echo '<script>alert("please fill in the information");</script>';
  }
}
?>
