<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>中国好声音系统</title>
</head>
<body >
<div id="contain">
<?Php
// 
	include 'top.html';
?>
<div id="navdiv" style=" width:1348px; height:50px; line-height:50px;background-color:#000000; text-indent:0px; text-align:center; font-size: 24px ;font-weight: bolder; color:#FFFFFF;cursor:hand;"><a href="daoshi.php" class="alink">  导  师  资  料  </a> | <a href="xueyuan.php" class="alink">  学  员  资  料  </a> | <a href="saicheng.php" class="alink">  赛  程  一  览  </a> | <a href="vote/index.php" class="alink">  投  票  吧  亲  </a></div>
<div>
<script language="javascript" src="login/js/login.js"></script>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="805px">
	<tr>
		<td colspan="2" height="15px">&nbsp;</td>
	</tr>
	<tr>	
		<td align="center" valign="top"><?php include 'center.php'; ?></td>
		<!--<td width="209px" align="left" valign="top"><?php include 'login/login.php'; ?></td>-->
	</tr>
</table>
<p />
</div>
<div align="center"><?php include 'bottom.html'; ?></div>
</div>
</body>
</html>
