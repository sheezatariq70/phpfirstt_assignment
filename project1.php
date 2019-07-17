
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create database</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
     <div class="jumbotron">
    <h2 align="center">Users Data</h2>
  </div>

    <div class="container">
    <table class="table table-bordered">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Address</th>
      <th>Age</th>
      <th>Location</th>
      <th>Date</th>
      <th colspan="2">Action</th>
</tr>
</thead>
    <?php
   $connection = mysqli_connect('localhost','root', '', 'project1');
    $q = "SELECT * from users";
    $result = mysqli_query($connection, $q);
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      $emailaddress = $row['emailaddress'];
      $location = $row['location'];
      $age = $row['age'];
      $date = $row['date'];?>
<tbody>
      <tr>
      <td><?php echo $id  ?></td>
      <td><?php echo $firstname  ?></td>
      <td><?php echo $lastname  ?></td>
      <td><?php echo $emailaddress  ?></td>
      <td><?php echo $age  ?></td>
      <td><?php echo $location  ?></td>
      <td><?php echo $date  ?></td>
      <td><?php echo $location  ?></td>

      <td><a href="<?php echo 'projectupdate.php?id=' .$id ?>">Edit</a> </td>
      <td><a href="<?php echo 'projectdelete.php?id=' .$id ?>">Delete</a></td>
  </tr>

  <?php
}
?>
<tbody>
</table>
</div>
<div class="container">

<a href="projectform.php" class="btn btn-primary">BACK to Home</a>
</div>
</body>
</html>
