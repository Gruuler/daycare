<?php
	if(!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['phone'])){
		header("Location:servicesFinal.php?status=1");
	}else{
		$statusEmpty="";
		if(empty($_GET['name'])){
			$statusEmpty="&v1=1";
		}
		if(empty($_GET['email'])){
			$statusEmpty=$statusEmpty."&v2=1";
		}
		if(empty($_GET['phone'])){
			$statusEmpty=$statusEmpty."&v3=1";
		}
		header("Location:servicesFinal.php?status=0".$statusEmpty);
	}
?>