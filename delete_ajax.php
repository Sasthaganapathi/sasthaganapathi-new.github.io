<?php
include("connection.php");
$sql="delete from user1 where id='".$_POST['id']."'";
	
	$stmt=pg_query($sql);
	if($stmt){
		echo '0';
		exit;
     
	}else 
		echo '1';
	exit;

	?>