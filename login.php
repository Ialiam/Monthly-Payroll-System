<?php
$db = mysqli_connect("localhost", "root", "", "user");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users WHERE email='".$email."' and password='".$password."'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: show.php");
    }else {
        echo "incorrect email/password combination";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Dummy Authentication Module</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" action="login.php">
            <table>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>

                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>

                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>

                </tr>
            </table>
        </form>
    </body>
</html>
