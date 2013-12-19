<?php
	if(empty($_SESSION['name']) or is_null($_SESSION['name'])){
		echo "<script>alert('请先登录！');location='../index.php';</script>";
	}
?>