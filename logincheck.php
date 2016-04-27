<?php
	if(!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['phone'])){
		header("Location:servicesFinal.php?status=true");
	}else{
		header("Location:servicesFinal.php?status=false");
	}
?>