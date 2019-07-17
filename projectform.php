
<?PHP
if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $emailaddress = $_POST['emailaddress'];
  $age = $_POST['age'];
  $location = $_POST['location'];
  $date = $_POST['date'];

$connection = mysqli_connect('localhost','root', '', 'project1');
if($connection){
  echo "we are connected";
}
else{
  die("connection failed");
}
$query = "INSERT INTO users (firstname,lastname,emailaddress,age,location,date)
VALUES ('$firstname','$lastname','$emailaddress','$age','$location','$date')";
echo "$query";
$result = mysqli_query($connection, $query);
if(!$result){
  die('query failed' .mysqli_connect_error());
}
header("location:project1.php");
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
<div class="jumbotron" align="center">
<h3>CREATE YOUR ACCOUNT</h3>
</div>
<div class="container">
<form action="projectform.php" method="POST">

<div class="form-group">
<label class="control-label col-sm-10" for="firstname">First Name:</label>
 <div class="col-sm-5" >
<input type="text" name="firstname"  class="form-control" id="firstname" placeholder="Type Your First Name"><br>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-10"  for="lastname">Last Name:</label>
<div class="col-sm-5">
<input type="text" name="lastname"  class="form-control" id="lastname" placeholder="Type Your Last Name"><br>
</div>
</div>

<div class="form-group" >
<label class="control-label col-sm-10" for="email">Email:</label>
<div class="col-sm-5">
<input type="email" name="emailaddress"  class="form-control" id="email" placeholder="Type Your Email address"><br>
<div>
</div>

<div class="form-group">
<label class="control-label col-sm-20" for="age">Age:</label>
<div class="col-sm-20">
<input type="number" name="age" class="form-control" id="age" placeholder="Type Your Age"><br>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-20" for="location">Location:</label>
<div class="col-sm-20">
<input type="text" name="location" class="form-control" id="location" placeholder="Type Your Location" ><br>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-20" for="date">Date:</label>
<div class="col-sm-20">
<input type="text" name="date" class="form-control" id="date"  placeholder="Type Date" ><br>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-20 col-sm-20">
<div class="checkbox">
<label><input type="checkbox"  name="remember"> Remember me</label>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-20 col-sm-20">
<input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
</div>
</div>
</form>
</div>
</body>
</html>
