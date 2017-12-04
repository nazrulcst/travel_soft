<?php

	$db_host = "localhost";
	$db_name = "tpbuzzbd";
	$db_user = "root";
	$db_pw = "";
	$db_charset = "UTF8";

	try{

		$dbh = new PDO("mysql:host=$db_host;dbname=$db_name;charset=$db_charset",$db_user,$db_pw);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$dbh->exec("set charset utf8");// return all sql request as utf8

	}catch(PDOException $err){
		echo "Please connect your DB !".$err->getMessage().$err->getCode();
	}


?>