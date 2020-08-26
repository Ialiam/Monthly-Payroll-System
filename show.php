<?php
session_start();
if(isset($_SESSION['email'])) {
    echo "Hello ".$_SESSION['email'];
    echo "<br>Welcome to the payroll system.";
    echo "<br><a href='logout.php'>Logout</a>";
}else{
    header("location: login.php");
}
?>
