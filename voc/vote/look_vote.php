<?php  include_once("conn/conn.php");
if(!$_GET[id]){
	echo "没有指定ID！";
	exit();
}else{
?>
<html>
<head>
<title>投票程序——显示投票项</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet"  />
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>
<table width="1003" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td width="101" align="right" background="images/b_02.gif">&nbsp;</td>
    <td width="812" valign="top"><table width="812" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="626" height="97"><img src="images/bg2_06 (5).gif" width="626" height="97"></td>
        <td rowspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle">
		
	<center>
<?php
$sql="select * from tb_vote where tb_vote_id='$_GET[id]'";			//显示指定投票项
$result=mysql_query($sql,$conn);
$row=mysql_fetch_array($result);
$s=$row[tb_vote_num];
echo "<h1>$row[tb_vote_name]</h1>\n";
?>

<table width="626" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" background="images/bg3.gif" bgcolor="#FFFFFF">
<form action=look_vote_ok.php method=post>
<input type=hidden name=id value="<?php echo $row[tb_vote_id];?>">
<input type=hidden name=v_type value="<?php echo $row[tb_vote_type];?>">
<tr>
<td width="163" height="25" align="center">&nbsp;</td>
<td width="195" align="center">选项</td>
<td width="260" align="center">投票结果</td>
</tr>
<?php

$sql2="select * from tb_vote_record where tb_vote_id='$_GET[id]'";
$result2=mysql_query($sql2,$conn);
while($rows=mysql_fetch_array($result2)){
?>
<tr>
<td height="25" align="center">
<?php 

	if($row[tb_vote_type]==0){
		echo "<input type=radio name=r value=".$rows[tb_record_id].">\n";
	}else{
		echo "<input type=checkbox name=r[] value=".$rows[tb_record_id].">\n";
	}
?></td>
<td>&nbsp;<?php echo $rows[tb_record_name];?></td>
<td>&nbsp;
<?php
	if($rows[tb_record_num]==0)
	$width=0;
	else
	$width=$rows[tb_record_num]/$s;
	if($width!=0){
		echo "<img src=".$rows[tb_record_color].".bmp width=".($width*20)." height=10>\n";
	}
	echo $rows[tb_record_num]."/"."100";
?>
</td>
</tr>
<?php

}
?>

<tr><td height="25" colspan=3><center>
  <input type=submit value="确认提交"></center></td></tr>
</form>
</table>
<?php

}
?>
	



</td>
      </tr>
      <tr>
        <td height="59"><img src="images/bg2_06 (1).gif" width="626" height="59"></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="90" background="images/bg2_06.gif">&nbsp;</td>
  </tr>

</table>




</body>
</html>