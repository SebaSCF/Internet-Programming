<?php
    session_start();
    require 'config.php';

    $FirstName = $_SESSION['FirstName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="p-4 text-center">Welcome</h1>

<div class="ss">
<?php

echo "<a class='LogOUT' href='signin.php'>LogOut</a>";

if(isset($_POST['LogOUT'])){

    session_destroy();
    header("login.php");
    exit();
}
?>
</div>
</body>
</html>