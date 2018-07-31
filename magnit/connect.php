<!---developed by Ayaulym Chinaliyeva--->
<?php 
	$conn = mysqli_connect('localhost', 'root', '') 

	or die(mysqli_error());

	mysqli_select_db($conn, 'db_magnit') or die(mysqli_error($conn));
	mysqli_set_charset($conn, 'utf8');
 ?>	