<?php 

$connect = mysqli_connect ("localhost","root","","db_parita");

if($connect){
	//echo "Connection Succes";
}else{
	echo "Connection Failed";
	exit();
}	
	 
 ?>
