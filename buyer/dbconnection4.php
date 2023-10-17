<?php
$con = mysqli_connect("localhost","root","","garage","3306");
if(mysqli_connect_errno()){
	echo "Connection Failed".mysqli_connect_error();
}
?>