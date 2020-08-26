<?php
session_start();
if(isset($_SESSION['email'])){
    echo "Welcome ".$_SESSION['name']." to the system";
    echo "<br>Your username is ".$_SESSION['email'];
    echo "<br>Please logout to use the payroll system";
    echo "<br><a href='logout.php'> Logout</a>";
} else{
    header("location: login.php");
}

?>
