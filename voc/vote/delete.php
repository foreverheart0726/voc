<?php 
include_once("conn/conn.php");
?>
<html>
<head>
<title>投票选项</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">
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
    <td width="101" align="right" >&nbsp;</td>
    <td width="812" valign="top"><table width="812" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="626" height="97"></td>
        <td rowspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
         
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle">
		
		
		<p>
<a href=vote.php>添加记录</a>
<p>
<?php
$sql="select * from tb_vote";
$result=mysql_query($sql,$conn);		//执行查询语句，从数据库中读取投票主题的数据
$rows=mysql_fetch_array($result);
if($rows==0){
	echo "没有投票主题的数据！";
}else{
?>
<table width="626" border='1' cellpadding="0" cellspacing="0" bordercolor="#FFFFFF"  bgcolor="#FFFFFF">
<tr>
<td width='163' height="24" align="center">项</td>
<td width='195' align="center">
投票主题名称</td>
<td width='260' align="center">操作</td>
</tr>
<?php 
	$i=0;
	$sql="select * from tb_vote";
	$result=mysql_query($sql,$conn);
	while($row=mysql_fetch_array($result)){
		$i++;
?>
<tr>
<td height="24" align="center">
第<?php echo $i;?>条</td>
<td>&nbsp;&nbsp;
<a href="look_vote.php?id=<?php echo $row[tb_vote_id];?>"><?php echo $row[tb_vote_name];?></a>
</td>
<td align="center">
<a href="delete_vote.php?id=<?php echo $row[tb_vote_id];?>">删除</a></td>
</tr>
<?php 
	}
?>
  </table>
<?php 
}
?>		</td>
      </tr>
      <tr>
        <td height="59"></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="90" >&nbsp;</td>
  </tr>
  
</table>




</body>
</html>

