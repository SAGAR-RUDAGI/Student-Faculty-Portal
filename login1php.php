<?php
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
           //  echo "Login successful";
           // echo "<br>Redirecing...";
           header('Location: teacher_home.html');
        }
        else
        {
            echo 'The username or password are incorrect!';
            echo '<br>Please try again.';
            header('refresh: 3; login1.html');
        }
      }
 ?>
