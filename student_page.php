<html>
<head>
  <?php
  session_start();
  $usn=$_SESSION["usn"];
  $dbhost = 'localhost';     $dbuser = 'rootwp';   $dbpass = 'root@123';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  if($conn->connect_error) {
    die('Could not connect: ' .$conn->connect_error);
   }
  mysqli_select_db($conn,'user');
  ?>
<title>Student Database</title>
<style>
*{
  margin-left: 0;
  margin-right: 0;
  margin-top: 0;
}
table
{
border-collapse:collapse;
border:0px solid black;
width: 100%;
}
tr
{
border-bottom:1px solid black;
}
th
{
padding: 10px 35px 10px 35px;
font-size:20px;
}
td{
  text-align:center;
}
.row
{
color:green;
}
.row1
{
color:red;
}

.teacherAlign{
  text-align: justify;
}
</style>
<link rel="stylesheet" href="login1.css" type="text/css">
<link rel="stylesheet" type="text/css" href="teacher_home.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>
<div style="background-color: #e9ecef;">
<h2 align="center" style="color:black;"> MarAts</h2>
  <p align="center" style="color:black;">Welcome! Here are your results</p>
</div>
<nav class="navbar">
      <ul class="navlist">
         <li><a href="" class="link">HOME</a></li>
         <li><a href="" class="link">UPDATES</a></li>
         <li><a href="about.html" class="link">ABOUT</a></li>
         <li class="logout"><a href="login1.html" class="btn">LOGOUT</a></li>
      </ul>
</nav>
  <hr>
  <table cellspacing="15">
    <tr class="row">
      <th rowspan="2">Subject</th>
      <th rowspan="2" colspan="2" style="text-align: justify;">Faculty</th>
      <th colspan="2">Marks</th>
      <th colspan="2">Attendence</th>
    </tr>
    <tr class="row1">
      <th>CIE</th>
      <th>SEE</th>
      <th>Classes Attended</th>
      <th>Total Classes</th>
    </tr>
    <tr>
      <th>Discrete mathematics</th>
      <th class="teacherAlign">Gomati<th>
      <?php
      $query = "SELECT * FROM dms WHERE USN = '$usn'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result);
      echo "<td>".$row['CIE']."</td>
      <td>".$row['SEE']."</td>
      <td>".$row['Attended']."</td>
      <td>".$row['Total']."</td>"
      ?>
    </tr>
<tr>
      <th>Data Structures</th>
      <th class="teacherAlign">Dr.Jyoti S N<th>
        <?php
        $query = "SELECT * FROM ds WHERE USN = '$usn'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        echo "<td>".$row['CIE']."</td>
        <td>".$row['SEE']."</td>
        <td>".$row['Attended']."</td>
        <td>".$row['Total']."</td>"
        ?>
    </tr>
<tr>
      <th>Web Programming</th>
      <th class="teacherAlign">Sarith
        a A N<th>
        <?php
        $query = "SELECT * FROM wp WHERE USN = '$usn'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        echo "<td>".$row['CIE']."</td>
        <td>".$row['SEE']."</td>
        <td>".$row['Attended']."</td>
        <td>".$row['Total']."</td>"
        ?>
    </tr>
<tr>
      <th>Programming with C++</th>
      <th class="teacherAlign">Pradeep S<th>
        <?php
        $query = "SELECT * FROM cpp WHERE USN = '$usn'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        echo "<td>".$row['CIE']."</td>
        <td>".$row['SEE']."</td>
        <td>".$row['Attended']."</td>
        <td>".$row['Total']."</td>"
        ?>
    </tr>
<tr>
      <th>Computer Organization and Architecture</th>
      <th class="teacherAlign">Dr.GR Prasad<th>
        <?php
        $query = "SELECT * FROM coa WHERE USN = '$usn'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        echo "<td>".$row['CIE']."</td>
        <td>".$row['SEE']."</td>
        <td>".$row['Attended']."</td>
        <td>".$row['Total']."</td>"
        ?>
    </tr>
  </table>
</div>
</body>
</html>
