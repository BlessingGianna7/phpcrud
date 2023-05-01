<?php



$conn = new mysqli('localhost','root','','crud_operations');

if($conn){
  echo "Connected to database successfully!";
}else{
  // echo "Failed to connect to database";
  die(mysqli_error($conn));
  exit(0);
}
?>