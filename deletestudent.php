<?php

// php code to Delete data from mysql database 

if (isset($_POST['Student_id'])) {
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "cap";

  // get id to delete
  $id = $_POST['Student_id'];

  // connect to mysql
  $connect = mysqli_connect($hostname, $username, $password, $databaseName);

  // mysql delete query 
  $query = "DELETE FROM `student` WHERE `S_ID` = $id";

  $result = mysqli_query($connect, $query);

  if ($result) {
    echo 'Data Deleted';
  } else {
    echo 'Data Not Deleted';
  }
  mysqli_close($connect);
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="college.css">
  <title>Delete Student Info</title>
  <link rel="icon" href="logo.png" type="image/x-icon">
</head>

<body>
  <h1>Enter the necessary Details</h1>
  <div class="myform">
    <form name="Student_delete" method="POST" action="">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Student ID</label>
          <input type="text" class="form-control" id="Student_id" name="Student_id" placeholder="Enter the Student ID of the record to be deleted" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mybtn">SUBMIT</button>
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>