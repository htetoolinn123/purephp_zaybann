<?php 
require 'db_connect.php';
$id = $_POST['id'];
$code = $_POST['code'];
$name = $_POST['name'];
$newphoto = $_FILES['newphoto'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$description = $_POST['description'];
$brandid = $_POST['brandid'];
$subcategoryid = $_POST['subcategoryid'];

$oldphoto = $_POST['oldphoto'];
	// echo "$oldimg";s
	// die();

	$file_path = $oldphoto;

	if ($newphoto['size'] > 0) {
		unlink($oldphoto);
		$source_dir = "img/item/";
		$file_path = $source_dir.$newphoto['name'];
		move_uploaded_file($newphoto['tmp_name'], $file_path);
	}

move_uploaded_file($img['tmp_name'], $file_path);

$sql = "UPDATE items SET codeno=:codeno,name=:name,photo=:photo,price=:price,discount=:discount,description=:description,brand_id=:brand_id,subcategory_id=:subcategory_id WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->bindParam(':photo',$file_path);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':codeno',$code);
$stmt->bindParam(':price',$price);
$stmt->bindParam(':discount',$discount);
$stmt->bindParam(':description',$description);
$stmt->bindParam(':brand_id',$brandid);
$stmt->bindParam(':subcategory_id',$subcategoryid);
$stmt->execute();

header("location:item_list");

?>