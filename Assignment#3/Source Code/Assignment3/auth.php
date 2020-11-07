<?php
     include 'config.php';
        session_start();
        $FirstName = $_POST['FirstName'];
        $psword = $_POST['psword'];

        $FirstName = stripcslashes($FirstName);
        $psword = stripcslashes($psword);
        $FirstName = mysqli_real_escape_string($conn, $FirstName);
        $psword = mysqli_real_escape_string($conn, $psword);

        $query = "SELECT * FROM users WHERE FirstName = '$FirstName' and psword = '$psword' ";
        $cons = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($cons, MYSQLI_ASSOC);
        $count = mysqli_num_rows($cons);

        if($count == 1){
            $_SESSION['FirstName'] = $FirstName;
            header("location: home.php");
            echo "<h1><center> Login successful </center></h1>";
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
            echo "<a href='signin.php'>Go back to Login Page</a>";
        }

    ?>