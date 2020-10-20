<?php

   $DBSERVER = "localhost";
   $DBUSERNAME = "root";
   $DBPASSWORD = "";
   $DBNAME = "useraccounts";


   $conn = mysqli_connect($DBSERVER, $DBUSERNAME, $DBPASSWORD, $DBNAME);

   if ($conn === false){
       die("Error: Connection failed." . mysqli_connect_error());
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
      table {
  width: 100%;
}

th {
  height: 50px;
}
    </style>
</head>
<body>
  <h1>Sign Up for a Class</h1>


<form action="Registration.php" method="POST" class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01"  class="form-label">First name:</label>
    <input type="text" name="FirstName" class="form-control is-valid" id="validationServer01" placeholder="Mark" required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name:</label>
    <input type="text" name="LastName" class="form-control is-valid" id="validationServer02" placeholder="Otto" required>
  </div>

  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Class Code(CS-450):</label>
      <input type="text" name="ClassCode" class="form-control is-invalid" id="validationServerClassCode" aria-describedby="inputGroupPrepend3" required>
  </div>

  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Class Name:</label>
    <input type="text" name="ClassName" class="form-control is-invalid" id="validationServer03" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control is-invalid" id="validationServer05" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" name="Submit_Reg" type="submit" value="Sign Up">Sign Up</button>
  </div>

<h2><a href="index.php">Class List</a></h2>

</form>

<div class="Response">
<?php
if(isset($_POST['Submit_Reg'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $ClassName = $_POST['ClassName'];
    $ClassCode = $_POST['ClassCode'];
    $email = $_POST['email'];

    $Insdata = "INSERT INTO users(FirstName, LastName, ClassName, ClassCode, email) VALUES('$FirstName', '$LastName', '$ClassName', '$ClassCode', '$email')";
    $execte = mysqli_query($conn, $Insdata);


echo $FirstName . " was enrolled in " . $ClassCode;
}
?>



</div>
<table border="5" class="tablex">
<tr>
    <th>Name: </th>
    <th>Last Name: </th>
    <th>Class Code: </th>
    <th>Class Name: </th>
    <th>Email</th>

</tr>
<br>
<?php
						$check = "SELECT * FROM users";
						$execCheck = mysqli_query($conn, $check);
						$checkrows = mysqli_num_rows($execCheck);
						$row = mysqli_fetch_array($execCheck);

						if(!$execCheck){
							echo"Error";
						}else{
							if($checkrows<1){
								echo"<tr><td>No data in the system.</td></tr>";
							}else{
								for($i=0; $i<=$row; $i++){
									echo'
										<tr>
											<td>'.$row[0].'</td>
											<td>'.$row[1].'</td>
											<td>'.$row[3].'</td>
                                            <td>'.$row[2].'</td>
                                            <td>'.$row[4].'</td>
										</tr>
									';
									$row = mysqli_fetch_array($execCheck);

								}

							}
						}


					?>

</body>
</html>