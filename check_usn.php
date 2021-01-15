<?php

include 'conn.php';

$data = json_decode(file_get_contents("php://input"));

// Username
$uname = $data->usn;
 
$resText = '';

if($uname != ''){
 // Check username
 $sel = mysqli_query($con,"select count(*) as allcount from student where usn = '".$uname."' ");
 $row = mysqli_fetch_array($sel);

 $resText = "";
 if($row['allcount'] > 0){
  $resText = 'This USN is Already Available';
 }
}

echo $resText;
