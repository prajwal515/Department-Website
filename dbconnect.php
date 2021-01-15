<?php



	define('HOST','localhost:3306'); //path
   define('USER','root'); //user name
   define('PASS',''); //password
   define('DB','mca'); //database name
   
   $conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
  
    
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
		echo "unsuccessfull";
    }
	
	else{
		
	//echo "Sucessfully connected";
	}
?>