<?php
session_start();
if(!isset($_SESSION['adminId']) && !isset($_SESSION['time'])){
	header("Location:login.php");
	exit();
}
?>