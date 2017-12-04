<?php
require('db.php');
session_start();
$userName = trim(htmlspecialchars($_POST['userName']));
$userPass = trim(htmlspecialchars($_POST['userPass']));

if(!empty($userName) && !empty($userPass)){
	$sha1Pass = sha1($userPass);
	$userSelect=$dbh->prepare("SELECT * FROM `login` WHERE `userName`=? AND `password`=?");
	$userSelect->bindParam(1,$userName);
	$userSelect->bindParam(2,$sha1Pass);
	$userSelect->execute();
	$fetchRow = $userSelect->fetch(PDO::FETCH_OBJ);
	
	if($fetchRow->password == $sha1Pass && $fetchRow->userName){
		
		if($fetchRow->status == 1){
			$_SESSION['adminId'] = $fetchRow->id;
			$_SESSION['time'] = time(rand());
			header("Location:index.php");
		}else{
			$_SESSION['lerrms'] = "<p class='alert alert-info'>This user are block !</p>";
			header("Location:login.php");
		}
		
	}else{
		$_SESSION['lerrms'] = "<p class='alert alert-warning'>user name or password incorrect !</p>";
		header("Location:login.php");
	}
	
}else{
	$_SESSION['lerrms'] = "<p class='alert alert-danger'>Enter all required field !</p>";
	header("Location:login.php");
}


?>