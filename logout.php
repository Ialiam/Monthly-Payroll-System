<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    echo "Logged Out";
    echo "<br><a href='login.php'>Login</a>";
}else{
    header("location: login.php");
}
?>
