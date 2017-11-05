<?php
   	include("connect.php");
   	
   	$link=Connection();

	$uid=$_GET["uid"];
	$pri=$_GET["pri"];

	$query = "INSERT INTO `users`  (`index`, `uid`, `priority`)
		VALUES ('1','".$uid."','".$pri."')"; 
   	
   	mysql_query($query,$link);
	mysql_close($link);

   	header("Location: index.php");
?>
