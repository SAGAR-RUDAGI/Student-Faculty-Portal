<?php
session_start();
$_SESSION["usn"]=$_POST["uId-login"];
$dbhost = 'localhost';     $dbuser = 'rootwp';   $dbpass = 'root@123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if($conn->connect_error) {
  die('Could not connect: ' .$conn->connect_error);
 }
echo 'Connected successfully<br>';
mysqli_select_db($conn,'user');
if(isset($_POST["uId-login"], $_POST["psw-login"]))
      {

          $name = $_POST["uId-login"];
          $password = $_POST["psw-login"];
          $query = "SELECT EID_USN, Password FROM users
            WHERE EID_USN = '".$name."' AND  Password = '".$password."'";
          $result1 = mysqli_query($conn, $query);

        if(mysqli_num_rows($result1) > 0 )
        {
            echo "Logging in";
            echo "<br><a href='student_page.php'>Click here to proceed</a>";
            header('Location: student_page.php');
        }
        else
        {
            echo 'The username or password are incorrect!';
            echo "<br><a href='login1.html'>Click here to try again</a>";
        }
      }
 ?>
