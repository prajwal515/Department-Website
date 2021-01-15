<?php

session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','','mca');

$date=date('d-m-Y');
$image=$mysqli->real_escape_string('image/'.$_FILES['image']['name']);
$header=$_POST['header'];
$about=$_POST['about'];
$sql = "INSERT INTO notification(date,header,about,image) values('$date','$header','$about','$image')";
if($mysqli->query($sql) === true){
    echo "<h2><script>alert('Successfully Uploaded  ');window.location.href = 'admin-home.php';</script></h2>";
    }
else{
    echo "<h2><script>alert('Upload unsuccessfull ');window.location.href = 'admin-home.php';</script></h2>";

   }
