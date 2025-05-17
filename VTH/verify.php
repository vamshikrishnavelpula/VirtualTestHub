<?php
	session_start();
	include("project.php"); 
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pass = $_POST['pass']; 
		$repass = $_POST['repass'];
		$DOB = $_POST['DOB']; 
		$MNUM = $_POST['MNUM']; 
		$addr = $_POST['addr'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$Country = $_POST['Country'];
		$num = $_POST['num'];
		
		if (!empty($email) && !empty($pass) && is_numeric($num)) {
			$query = "INSERT INTO users (fname,lname, email,pass, repass, DOB, MNUM, addr,state,city,Country,num) VALUES ('$fname','$lname', '$email','$pass', '$repass', '$DOB', '$MNUM', '$addr','$state','$city','$Country','$num')";
			mysqli_query($con, $query);
			echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
			header("Location:login.php");
		}
		else {
			echo "<script type='text/javascript'> alert('Please Enter valid information')</script>";
		}
	}
?>
