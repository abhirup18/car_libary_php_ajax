<?php
include('dbconnection.php');

	if(isset($_POST['submit'])){
		$pass = $_POST['password'];
		$newpass = $_POST['newpassword'];
		$renewpass = $_POST['renewpassword'];

		// echo "<script>alert('$pass')</script>";
		// echo "<script>alert('$newpass')</script>";
		// echo "<script>alert('$renewpass')</script>";
		$sql=mysqli_query($con,"SELECT a_password FROM  admin where a_password=$pass");
		$num=mysqli_fetch_array($sql);

		if($num>0)
			{
 				$con=mysqli_query($con,"update  admin set a_password=$newpass");
				echo "<script>alert('Password changed successfully !!'); 
				window.location = 'admin_profile.php';</script>";
				
			}			
		else
			{
				echo "<script>alert('Old password did not match !!')</script>";
			}
	}
	

?>