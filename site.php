<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$design = $_POST['design'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];

	$conn = new mysqli('localhost', 'root', '', 'site');
	if($conn->connect_error){
		die('Connection failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT INTO site (name, email, phone, design, size, quantity)
			values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi",$name, $email, $phone, $design, $size, $quantity);
		$stmt->execute();
		echo "<script>alert('The order is successful'); window.location.href = 'blog.html';</script>";
		$stmt->close();
		$conn->close();
	}
?>