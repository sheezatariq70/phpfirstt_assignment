
<?php
$connection = mysqli_connect('localhost','root', '', 'project1');
$id = $_GET['id'];
$sql =  "SELECT * from users WHERE id= '$id'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $emailaddress = $_POST['emailaddress'];
  $age = $_POST['age'];
  $location = $_POST['location'];
  $date = $_POST['date'];
  $id = $_POST['id'];

  $query = "UPDATE users SET ";
  $query .= "firstname = '$firstname', ";
  $query .= "lastname = '$lastname', ";
  $query .= "emailaddress = '$emailaddress', ";
  $query .= "location = '$location', ";
  $query .= "age = '$age', ";
  $query .= "date = '$date' ";
  $query .= " WHERE id = '$id'";



$result = mysqli_query($connection,$query);
if(!$result){
  echo "$query";
  die("query failed".mysqli_error($connection));


}else {
  header("location:project1.php");
    echo "$query";
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create database</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>

  <div class="jumbotron">
    <h3 align = "center">UPDATE USERS DATA</h3>
    </div>
    <div class="container">
    <div class="col-xs-6">
<form class="" action="projectupdate.php" method="post">


       <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : '' ?>"><br>

   <div class="form-group">
    First Name:<input type="text" name="firstname" value="<?php echo isset($row['firstname']) ? $row['firstname'] : '' ?>" class="form-control"><br>
  </div>
      <div  class="form-group">
    Last Name: <input type="text" name="lastname" value="<?php echo isset($row['lastname']) ? $row['lastname'] : '' ?>" class="form-control"><br></div>
      <div  class="form-group">
    Email: <input type="email" name="emailaddress" value="<?php echo isset($row['emailaddress']) ? $row['emailaddress'] : '' ?>" class="form-control"><br></div>
      <div  class="form-group">
    Age: <input type="number" name="age" value="<?php echo isset($row['age']) ? $row['age'] : '' ?>" class="form-control" ><br></div>
      <div  class="form-group">
    Location:<input type="text" name="location" value="<?php echo isset($row['location']) ? $row['location'] : '' ?>" class="form-control"><br></div>
      <div  class="form-group">
    Date:<input type="text" name="date" value="<?php echo isset($row['date']) ? $row['date'] : '' ?>"class="form-control"><br></div>
      <div  class="form-group">
<input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
    </form>
</div>
</body>
</html>
