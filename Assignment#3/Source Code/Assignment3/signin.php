

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
      <h1 class="p-4 text-center">Sign-in</h1>
   </div>
</header>

<script>
        function validate() {
            var name = document.forms["Signin"]["FirstName"];
            var psword = document.forms["Signin"]["psword"];


            if (name.value == "") {
                window.alert("Please enter your name.");
                name.focus();
                return false;
            }  if (psword.value == "") {
                window.alert("Please enter a valid password.");
                psword.focus();
                return false;

            }

            return true;

        }
    </script>

<div class="container">
   <form action="auth.php" name="Signin" method="POST" onsubmit="return validate()" class="g-3">
   <div class="form-group">
       <label for="InputFirstName">First Name: </label>
       <input type="text" name="FirstName" class="form-control" id="InputFirstName">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Password: </label>
       <input type="password" name="psword" class="form-control" id="exampleInputPassword1">
     </div>
   <div>
     <button type="Login" name="Login" value="Login" class="btn btn-primary">Login</button>
     </div>
   </form>
</div>



</body>
</html>