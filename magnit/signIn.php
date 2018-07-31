<!---developed by Ayaulym Chinaliyeva--->
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="pagesDesign.css">
	<link rel="icon" href="icon.ico">
</head>
<body>
	<div>
		<ul class="navbar"><li class="liForCompany">Profile</li></ul>
	</div>
	<div align="left">
<?php
	include 'connect.php';
	
	$login = $_POST['login'];
	$password = $_POST['ipassword'];

	$sql = "SELECT * FROM `db_magnit`.`registeredusers` WHERE login='$login' && password = '$password'";
	$result = mysqli_query($conn, $sql);

	$counter=9;


	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} else {
	$result = mysqli_query($conn, $sql);
	$resultArray = mysqli_fetch_array($result);
	while($counter>0){
		$counter--;
		$nameArr = $resultArray['name'];
		$lnameArr = $resultArray['lname'];
		$login = $resultArray['login'];
		$org_type = $resultArray['org_type'];
		$address = $resultArray['address'];
		$email = $resultArray['email'];
		$phoneNumber = $resultArray['phone'];
		$password = $resultArray['password'];
		$passwordRepeat = $resultArray['passwordRepeat'];
	}
	echo '<span style="color:#111;text-align:center;font-size:50px;">Name: '.$nameArr.'<hr><br>Last name: '.$lnameArr.'<hr><br>Login: '.$login.'<hr><br>Organization type: '.$org_type.'<hr><br>Address: '.$address.'<hr><br>E-mail: '.$email.'<hr><br>Phone number: '.$phoneNumber.'<hr><br>Password: '.$password.'<hr>';
}
?>
</div>
</body>
</html>