<?php
session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','','mca');

$name=$_POST['username'];
$f_name=$_POST['fathername'];
$m_name=$_POST['mothername'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$job_desc=$_POST['job_desc'];
$about=$_POST['about'];
$expriences=$_POST['expriences'];
$phone_no=$_POST['phone_no'];
$emial=$_POST['emial'];
$password=$_POST['password'];
$qualification=$_POST['qualification'];
$address=$_POST['address'];
$read_more=$_POST['read_more'];
$image=$mysqli->real_escape_string('image/'.$_FILES['photo']['name']);



$sql = "INSERT INTO faculty(name,f_name,m_name,dob,gender,job_type,about,expriences,m_no,email,password,qualification,address,photo,read_more) values('$name','$f_name','$m_name','$dob','$gender','$job_desc','$about','$expriences','$phone_no','$emial','$password','$qualification','$address','$image','$read_more')";
if($mysqli->query($sql) === true) {
    echo "<h2><script>alert('Successfully Registered  ');window.location.href = 'admin-home.php';</script></h2>";
    }
else{
    echo "<h2><script>alert('Register unsuccessfull ');window.location.href = 'admin-home.php';</script></h2>";

   }
	  
	  

