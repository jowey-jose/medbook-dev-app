<!DOCTYPE html>
<html lang="en">
<head>
  <title>medbook-dev-app</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medbook_db";


// Create connection to med
$conn = new mysqli($servername, $username, $password, $dbname);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connected to Database Successfuly!";
  echo "</br>";
}

if(isset($_POST['submit']))
{   
  $patient_name = $_POST['patient_name'];
  $patient_dob = $_POST['patient_dob'];
  $gender_type = $_POST['gender_type'];
  $service_type = $_POST['service_type'];
  $general_comments = $_POST['general_comments'];


  // Inserting To DataBase
  // $sql = "INSERT INTO tbl_patient(patient_name, patient_dob)
  // VALUES ('$patient_name',$patient_dob)";

  // $sql="INSERT INTO tbl_gender(gender_type)
  // VALUES ('$gender_type)";

  $sql="INSERT INTO `patients_db`(`patient_name`, `patient_dob`, `gender_type`, `service_type`, `general_comments`)
    VALUES ('$patient_name','$patient_dob','$gender_type','$service_type','$general_comments')";

  if (mysqli_query($conn, $sql)) {
     echo "New record has been added successfully !";
  } else {
     echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  // mysqli_close($conn);
}else{
  echo "</br>";
  echo "No data was provided";
}


?>
<div class="container">
  <h2 style="text-align: center;">Enter Patient Details:</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
    <div class="form-group">
      <label for="patient_name">Name of Patient:</label>
      <input type="patient_name" class="form-control" id="patient_name" placeholder="Input text" name="patient_name">
    </div>
    <div class="form-group">
      <label for="patient_dob">Date of birth:</label>
      <input type="patient_dob" class="form-control" id="patient_dob" placeholder="Date" name="patient_dob">
    </div>
    <div class="form-group">
      <label for="general_comments">General Comments:</label>
      <input type="general_comments" class="form-control" id="general_comments" placeholder="Input Comment" name="general_comments">
    </div>
    <div class="form-group">
      <label for="service_type">Type of Service:</label></br>
      <select name="service_type" id="service_type">
          <option value="outpatient">Out Patient</option>
          <option value="inpatient">In Patient</option>
      </select>
      <br>
    </div>
    <div class="form-group">
      <label for="gender_type">Gender:</label></br>
        <select name="gender_type" id="gender_type">
          <option value="male">male</option>
          <option value="female">female</option>
      </select>
      <br><br>
    </div>
    <button name= "submit" type="submit" class="btn btn-default">Submit</button>
  </form>
  
</div>

<div class="container">
  <h2 style="text-align: center;">Patient's Table</h2>
  <p>The table is automatically updated once a new patient is added.</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name </th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Type of Service</th>
        <th>General Comments</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php // Access Values of the DB
          $sql = "SELECT `patient_name` FROM `patients_db` ";
          $result = mysqli_query($conn, $sql); // Data Fetched stored in the variable  results

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
              //Associative array using key to access value stored in the db.

                echo $row["patient_name"]. "<br>";
            }
          } else {
            echo "0 results";
          } ?>
        </td>

        <td><?php // Access Values of the DB
          $sql = "SELECT `patient_dob` FROM `patients_db` ";
          $result = mysqli_query($conn, $sql); // Data Fetched stored in the variable  results

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
              //Associative array using key to access value stored in the db.

                echo $row["patient_dob"]. "<br>";
            }
          } else {
            echo "0 results";
          } ?>
        </td>

        <td><?php // Access Values of the DB
          $sql = "SELECT `gender_type` FROM `patients_db` ";
          $result = mysqli_query($conn, $sql); // Data Fetched stored in the variable  results

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
              //Associative array using key to access value stored in the db.

                echo $row["gender_type"]. "<br>";
            }
          } else {
            echo "0 results";
          } ?>
        </td>

        <td><?php // Access Values of the DB
          $sql = "SELECT `service_type` FROM `patients_db` ";
          $result = mysqli_query($conn, $sql); // Data Fetched stored in the variable  results

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
              //Associative array using key to access value stored in the db.

                echo $row["service_type"]. "<br>";
            }
          } else {
            echo "0 results";
          } ?>
        </td>

        <td><?php // Access Values of the DB
          $sql = "SELECT `general_comments` FROM `patients_db` ";
          $result = mysqli_query($conn, $sql); // Data Fetched stored in the variable  results

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
              //Associative array using key to access value stored in the db.

                echo $row["general_comments"]. "<br>";
            }
          } else {
            echo "0 results";
          } ?>
        </td>

      </tr>
    </tbody>
  </table>
</div>

</body>
</html>