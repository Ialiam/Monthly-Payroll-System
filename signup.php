<?php
$db = mysqli_connect ("localhost", "root", '',"user");
if (isset($_POST['submit_button'])) {
       session_start();
       $name = $_POST['fullname'];
       $email= $_POST['email'];
       $password= ( $_POST['password']);
       $sql ="INSERT INTO  users (NAME,EMAIL,PASSWORD)  VALUE ('$name',  '$email ' , ' $password')";

mysqli_query ($db,$sql);
$_SESSION ['name'] = $name;
$_SESSION ['email'] = $email;
 header ("location: success.php");
}
 ?>


<!DOCTYPE html>
<html >
  <head>
 <title> Authentication Module</title>
  </head>
  <body>
            <h1>Welcome To Monthly Payroll System's  Sign Up Page</h1>

              <form method = "post" action = "signup.php" >


              <table>
                <tr>
                  <td>Name</td>
                  <td><input type ="text" name ="fullname" required ></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type ="email" name ="email" required ></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type ="password" name ="password" required ></td>
                </tr>
                <tr>

                  <td><input type ="submit" name ="submit_button" value = "SIGNUP" ></td>
                </tr>
              </table>

            </form>
  </body>
</html>
