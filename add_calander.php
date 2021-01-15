<?php

session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','','mca');

$image=$mysqli->real_escape_string('PDF_Files/'.$_FILES['calander']['name']);
$sql = "INSERT INTO calander_of_event(file) values('$image')";
if($mysqli->query($sql) === true){
    echo "<h2><script>alert('Successfully Uploaded  ');window.location.href = 'admin-home.php';</script></h2>";
    }
else{
    echo "<h2><script>alert('Upload unsuccessfull ');window.location.href = 'admin-home.php';</script></h2>";

   }
