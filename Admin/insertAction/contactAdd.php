<?php
require('../db.php');
session_start();
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$address = trim($_POST['address']);
$website = trim($_POST['website']); 

if(!empty($phone) && !empty($email) && !empty($address) && !empty($website)){
	$conInsert = $dbh->prepare("INSERT INTO `contact` SET `phone`=?,`email`=?,`address`=?,`website`=?");
	$conInsert->bindParam(1,$phone);
	$conInsert->bindParam(2,$email);
	$conInsert->bindParam(3,$address);
	$conInsert->bindParam(4,$website);
	if($conInsert->execute()){
		$_SESSION['contactMsg'] = "<p class='alert alert-success'>Your operation has been success!</p>";
		header("Location:../index.php?page=addContact&folder=login");
	}else{
		$_SESSION['contactMsg'] = "<p class='alert alert-warning'>Your operation has been failed!</p>";
		header("Location:../index.php?page=addContact&folder=login");
	}
}else{
	$_SESSION['contactMsg'] = "<p class='alert alert-danger'>Enter all require field!</p>";
	header("Location:../index.php?page=addContact&folder=login");	
}
?>