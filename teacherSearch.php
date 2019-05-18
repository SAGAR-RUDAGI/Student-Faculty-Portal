<html>
<head>
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
</head>


<?php
$sname=filter_input(INPUT_POST, 'studentSearch');
$subj=filter_input(INPUT_POST, 'subj');
if(empty($sname)){echo "Yes<br>";}
switch($subj){
  case 1: $subj = "COA";
          break;
  case 2: $subj = "DMS";
          break;
  case 3: $subj = "WP";
          break;
  case 4: $subj = "CPP";
          break;
  case 5: $subj = "DS";
          break;
}
$dbhost = 'localhost';     $dbuser = 'rootwp';   $dbpass = 'root@123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if($conn->connect_error) {
  die('Could not connect: ' .$conn->connect_error);
 }
// 'Connected successfully<br>';
mysqli_select_db($conn,'user');

$query = "SELECT * FROM $subj WHERE Name = '$sname'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0){
  echo "<table> <tr> <th>Name</th> <th>Attended</th> <th>Total</th><th>CIE</th><th>SEE</th> </tr>";
  echo "<td>".$row["Name"]."</td>";
  echo "<td>".$row["Attended"]."</td>";
  echo "<td>".$row["Total"]."</td>";
  echo "<td>".$row["CIE"]."</td>";
  echo "<td>".$row["SEE"]."</td>";
  echo "</tr> </table>";
}
else{
  echo "Record does not exist!";
}
 ?>
</html>
