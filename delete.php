 <?php
include'connection.php';
if(isset($_GET['deleteid'])){
 $id= $_GET['deleteid'];

 $sql = "DELETE FROM crud WHERE id=$id";
 $result = mysqli_query($conn,$sql);

 if($result){
  // echo "<br>Deleted successfully";
  header('location:display.php');
 }else{
  echo"Failed to delete successfully";
 }
}

?>