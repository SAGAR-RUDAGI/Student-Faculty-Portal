<?php
$sname=filter_input(INPUT_POST, 'studentName');
if(empty($sname)){echo "Yes<br>";}
$subj=filter_input(INPUT_POST, 'subj');
$usn=filter_input(INPUT_POST, 'usnStudent');
$atd=filter_input(INPUT_POST, 'attended');
$total=filter_input(INPUT_POST, 'total');
$cie=filter_input(INPUT_POST, 'cie');
$see=filter_input(INPUT_POST, 'see');
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
echo $subj."<br>";
$dbhost = 'localhost';     $dbuser = 'rootwp';   $dbpass = 'root@123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if($conn->connect_error) {
  die('Could not connect: ' .$conn->connect_error);
 }
echo 'Connected successfully<br>';
mysqli_select_db($conn,'user');

$query = "SELECT Name FROM $subj WHERE Name = '$sname'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)!=0){
  if($row[0]==$sname){
    $query1 = "UPDATE $subj
              SET USN='$usn', Attended = '$atd', Total = '$total',
              CIE = '$cie', SEE = '$see' WHERE Name = '$sname'";
    $result1 = mysqli_query($conn,$query1);
    if($result1){
      echo "Updated";
    }
    else {
      echo "Not updated".mysqli_error($conn);
    }
  }
}
else {
  $query2 = "INSERT INTO $subj (Name, USN, Attended, Total, CIE, SEE)
             VALUES ('$sname','$usn','$atd', '$total', '$cie', '$see')";
  $result2 = mysqli_query($conn,$query2);
  if($result2){
    echo "Inserted";
  }
  else {
    echo "Not inserted".mysqli_error($conn);
  }
}
echo "<br><a href='teacher_home.html'>Redirect Back</a>";
?>
