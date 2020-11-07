<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<section>
    <div class="container">
     <a class="link" href="index.php">Home</a>
     <a class="link" href="signin.php">Sign-In</a>
     <a class="link" href="signup.php">Sign-Up</a>
    </div>
</section>

<header>
   <div class="container">
      <h1 class="p-4 text-center"> Sign Up</h1>
   </div>
</header>
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.FirstName.value == "") {
      alert("Error: Username cannot be blank!");
      form.FirstName.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.FirstName.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.FirstName.focus();
      return false;
    }

    if(form.psword.value != "" && form.psword.value == form.psword2.value) {
      if(form.psword.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.psword.focus();
        return false;
      }
      if(form.psword.value == form.FirstName.value) {
        alert("Error: Password must be different from Username!");
        form.psword.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.psword.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.psword.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.psword.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.psword.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.psword.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.psword.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.psword.focus();
      return false;
    }
    return true;
  }

</script>


<div class="container">
   <form action="signup.php" name="Signup" method="POST" onsubmit="return checkForm(this)" class="g-3">
   <div class="form-group">
       <label for="InputFirstName">First Name: </label>
       <input type="text" name="FirstName" class="form-control" id="InputFirstName">
     </div>
     <div class="form-group">
       <label for="InputLastName">Last Name: </label>
       <input type="text" name="LastName" class="form-control" id="InputLastName">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Email address: </label>
       <input type="email" name="email" class="form-control" id="InputEmail">
       <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Password: </label>
       <input type="password" name="psword" class="form-control" id="exampleInputPassword1">
       <small id="passwordHelp"  class="form-text text-muted">Must Contain more than 6 characters and 1 Upper case and 1 Lower case letter.</small>
     </div>
     <div class="form-group">
       <label for="exampleInputPassword2">Re-Enter Password: </label>
       <input type="password" name="psword2" class="form-control" id="exampleInputPassword1">
     </div>
   <div>
     <button type="submit" name="Submit_Reg" value="Sign Up" class="btn btn-primary">Submit</button>
     </div>
   </form>
</div>

<div class="Response">
<?php
if(isset($_POST['Submit_Reg'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $psword = $_POST['psword'];

    $Insdata = "INSERT INTO users(FirstName, LastName, email, psword) VALUES('$FirstName', '$LastName', '$email', '$psword')";
    $execte = mysqli_query($conn, $Insdata);

echo $FirstName . " was successfully registered in the system. ";

}
?>
</div>


</body>
</html>