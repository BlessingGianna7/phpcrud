<?php 
include  'connection.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$password = $row['password'];

if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];  

$sql = "UPDATE  crud SET id=$id,firstname='$firstname',lastname='$lastname',email='$email',password='$password' WHERE id=$id";

$result = mysqli_query($conn,$sql);

if($result == true){
  // echo "<br> Data updated successfully"; 
  header('location:display.php');
}else{ 
  echo "Error:".$sql."<br />".$conn->err;
} 
$conn->close(); 
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Crud operation</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="mb-4">
          <label>Firstname</label>
          <input
            auto-complete="off"
            type="text"
            class="form-control"
            placeholder="Enter your firstname"
            name="firstname" value=<?php echo $firstname ;?>
          />
        </div>
        <div class="mb-4">
          <label>Lastname</label>
          <input
            autocomplete="off"
            type="text"
            class="form-control"
            placeholder="Enter your lastname"
            name="lastname" value=<?php echo $lastname ;?>
          />
        </div>
        <div class="mb-4">
          <label>Email</label>
          <input
            autocomplete="off"
            type="email"
            class="form-control"
            placeholder="Enter your email"
            name="email" value=<?php echo $email;?>
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-4">
          <label>Password</label>
          <input
            autocomplete="off"
            type="password"
            class="form-control"
            placeholder="Enter your password"
            name="password" value=<?php echo $password ;?>
          />
        </div>
        <div class="mb-4 form-check">
          <input
            autocomplete="off"
            type="checkbox"
            class="form-check-input"
            id="exampleCheck1"
          />
          <label class="form-check-label" for="exampleCheck1"
            >Check me out</label
          >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">
        Update
        </button>
      </form>
    </div>
  </body>
</html>
