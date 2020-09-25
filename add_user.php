<?php
	require "db_connect.php";

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$role = $_POST['role'];

	$sql="INSERT INTO users (name,phone,email,password,address,role_id) VALUES (:name,:phone,:email,:password,:address,:role)";

	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':phone',$phone);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':password',$password);
	$stmt->bindParam(':address',$address);
	$stmt->bindParam(':role',$role);
	$stmt->execute();

	if($stmt->rowCount())
	{
		header("location:login");
	}
	else
	{
		echo "ERROR!";
	}
?>