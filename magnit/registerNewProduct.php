<!---developed by Ayaulym Chinaliyeva--->
<?php
include 'connect.php';
$productName = $_POST['productName'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$sql = "INSERT INTO `db_magnit`.`goods` (`product`, `category`, `description`, `price`) VALUES ('$productName', '$category', '$description', '$price');";
$result = mysqli_query($conn, $sql);
if ($result===TRUE) {
	echo "Success";
}else{
	echo "Try later.";
}
?>