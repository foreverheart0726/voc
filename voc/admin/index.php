<?php
	session_start();
	header('Content-Type:text/html; charset=UTF-8');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	$act = $_GET['act'];
	$photoadminname = $_SESSION['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>Administrator</title>
</head>
<script language="javascript" src="js/member.js"></script>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="js/member.js"></script>
<div align="center">
<?Php
	include 'top.html';
	include 'nav.html';
?>
<div style=" width:805px; text-align:center;">
<?php
  switch($act){
  	case 'type':
		include_once 'pictype.php';
		break;
	case 'pic':
		include_once 'typelist.php';
		break;
	case 'upload':
		include_once 'upfile.php';
		break;
	case 'makealbum':
		include_once 'makealbum.php';
		break;
	case 'modpic':
		include_once 'mod.php';
		break;
	default:
		include_once 'typelist.php';
		break;
}
?>
</div>
<p />
<div><?php include '../bottom.html'; ?></div>
</div>

</div>