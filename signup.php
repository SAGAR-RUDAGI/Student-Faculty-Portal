<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <?php
    // if (isset(filter_input(INPUT_POST, 'uIdL')))
      $uId=filter_input(INPUT_POST, 'uId_signup');
      if(empty($uId)){echo "Empty<br>";}
      // $uId=$_POST['uIdL'];
    // else
    //   echo "NOT SET";
      $email=filter_input(INPUT_POST, 'email_signup');

      $password=filter_input(INPUT_POST, 'psw_repeat_signup');
      if(empty($password))
      echo "1111111111111111111111<br>";
      $dbhost = 'localhost';     $dbuser = 'rootwp';   $dbpass = 'root@123';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
      if($conn->connect_error) {
        die('Could not connect: ' .$conn->connect_error);
       }
      echo 'Connected successfully<br>';
      mysqli_select_db($conn,'user');
      $query = "INSERT INTO users (EID_USN, Email, Password)
      VALUES ('$uId','$email', '$password')";
      $result=mysqli_query($conn, $query);
      if($result)
        {
          echo "Sign-up successful<br> <br>";
          echo "Redirecing to login page...";
           header('refresh: 3; url=login1.html');
           exit(0);
        }

      else
        {
          die('Could not retrieve data.'.mysqli_error($conn).'<br>');

        }
      // echo "<a href='login1.html'>Click here to LOGIN</a>";
      mysqli_close($conn);
    ?>
  </body>
</html>
