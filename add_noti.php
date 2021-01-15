<?php

session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','','mca');

$date=date('d-m-Y');
$header=$_POST['header'];
$link=$_POST['link'];

$sql = "INSERT INTO noti_marquee(date,header,link) values('$date','$header','$link')";
if($mysqli->query($sql) === true){
    echo "<h2><script>alert('Successfully Uploaded  ');window.location.href = 'admin-home.php';</script></h2>";
    }
else{
    echo "<h2><script>alert('Upload unsuccessfull ');window.location.href = 'admin-home.php';</script></h2>";

   }

