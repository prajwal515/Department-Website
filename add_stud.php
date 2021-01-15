<?php
session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','','mca');

$image=$mysqli->real_escape_string('image/'.$_FILES['myimage']['name']);
$name=$_POST['name'];
$usn=$_POST['usn'];
//$image="images/"+$imagepath;
$sql = "INSERT INTO student(usn,name,f_name,m_name,dob,gender,aadher,m_no,qualification,d_marks,branch,fee,email,password,sem,address,photo) values('$usn','$name',"."'".$_POST['fathername']."',"."'".$_POST['mothername']."',"."'".$_POST['dob']."',"."'".$_POST['gender']."',"."'".$_POST['aadher']."',"."'".$_POST['phone_no']."',"."'".$_POST['quali']."',"."'".$_POST['marks']."',"."'".$_POST['branch']."',"."'".$_POST['fee']."',"."'".$_POST['email']."',"."'".$_POST['pass']."',"."'".$_POST['sem']."',"."'".$_POST['addr']."','$image')";
if($mysqli->query($sql) === true) {
    echo "<h2><script>alert('Successfully Registered  ');window.location.href = 'admin-home.php';</script></h2>";
    }
else{
    echo "<h2><script>alert('Register unsuccessfull ');window.location.href = 'admin-home.php';</script></h2>";

   }
	  
	  

