<?php

include 'conn.php';

$data = json_decode(file_get_contents("php://input"));

// Username
$uname = $data->email;
 
$resText = '';

if($uname != ''){
 // Check username
 $sel = mysqli_query($con,"select count(*) as allcount from student where email = '".$uname."' ");
 $row = mysqli_fetch_array($sel);

 $resText = "";
 if($row['allcount'] > 0){
  $resText = 'This Email Address Is Already Available';
 }
}

echo $resText;
