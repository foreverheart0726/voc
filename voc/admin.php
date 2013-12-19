<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>后台管理</title>
</head>
<script language="javascript" src="login/js/login.js" charset="GBK"></script>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<td width="209px" align="left" valign="top">
<?php
	include_once 'conn/conn.php';
	for($i=0;$i<4;$i++){
		$num .= dechex(rand(0,15));
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div style=" position:relative; width:209px; height:206px; background-image: url(images/lg.gif); background-position: top; background-repeat:no-repeat;">
  <div style=" position:absolute; top:66px; left:80px; width:90px;"><input name="text" type="text" id="lgname" style=" width:95px; border: 1px #817158 solid; height:16px;" /></div>
  <div style=" position:absolute; top:90px; left:80px; width:90px;"><input name="text" type="password" id="lgpwd" style=" width:95px; border: 1px #817158 solid; height:16px;" /></div>
  <div style=" position:absolute; top:111px; left:80px;">
    <input name="text" type="txt" id="lgchk" style=" width:30px; border: 1px #817158 solid; height:16px;" maxlength="4" />
  <img id='chkid' src="login/valcode.php?num=<?php echo $num; ?>" width="40" height="20" />
  <a id="changea" style="cursor:hand; font-size:12px">看不清</a>
  </div>
<div style="position:absolute;top:153px; left:42px;">
<input id="chknm" name="chknm" type="hidden" value="<?php echo $num; ?>"  />
	<button id="lgbtn" style=" position:absolute; width:50px; height:20px; background: url(images/lgbtn.gif); background-position:center; background-repeat:no-repeat;"></button>
</div>
</div>