<!---developed by Ayaulym Chinaliyeva--->
<?php
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$login = $_POST['login'];
	$org_type = $_POST['radio'];
	$address = $_POST['address'];
	$phoneNumber = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['passwordRepeat'];
	$sql = "INSERT INTO `db_magnit`.`registeredusers` (`name`, `lname`, `login`, `org_type`, `address`, `phone`, `email`, `password`, `password_repeat`) VALUES ('$name', '$lname', '$login', '$org_type', '$address', '$phoneNumber', '$email', '$password', '$password2');";


	include 'connect.php';
	
	$result = mysqli_query($conn, $sql);
	if ($result===TRUE) {
		echo '<a href="mainPage.html">Click here to go on homepage</a>';
	}else{
		echo "Try a little later.";
	}
?>