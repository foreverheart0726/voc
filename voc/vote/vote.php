<html>
<head>
<title>投票程序</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="../css/style.css" />
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
<script language=javascript>
function check_vote(form)
{
	if (form.v_name.value == "")
	{
		alert("请输入投票项名称!");
		theForm.v_name.focus();
		return (false);
	}
}
</script>
<center>
<table width="1003" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td width="101" align="right"></td>
    <td width="812" valign="top"><table width="812" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="626" height="97"></td>
        <td rowspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php include_once("conn/conn.php");
if((!$_POST[v_name]) &&(!$_POST[r][1])){

?>
<table width="587" border=0 cellpadding="0" cellspacing="0">
<form method="post" action="vote.php" onSubmit="return check_vote(this)">
<tr>
<td width="164" ><div align="right">添加投票主题内容：</div></td>
<td width="462" height="29" ><input type=text name=v_name></td>
</tr>
<tr>
<td><div align="right">选择投票类型：</div></td>
<td height="29">
<input type=radio name=v_type value=0 checked>单选
<input type=radio name=v_type value=1>多选</td>
</tr>
<tr>
<td ><div align="right">设置投票项的项数：</div></td>
<td height="29">
<select name=v_m size=1>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
<option value=6>6</option>
<option value=7>7</option>
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
</select>
</tr>
<tr>
<td height="29" colspan="2">
<center><input type=submit value="下一步">
</center></td>
</tr>
</form>
</table>
<?php 
	}else if(!$_POST[r][1]){
?>
<script language=javascript>
function check_vote(form)
{
	if (form.v_name.value == "")
	{
		alert("请输入投票项名称!");
		theForm.v_name.focus();
		return (false);
	}
}
</script>
&nbsp;<table width="587" border=0 cellpadding="0" cellspacing="0">
	<form method="post" action="vote.php" onSubmit="return check_vote(this)">
	<tr>
		<td height="25" colspan=4><center><?php echo $_POST[v_name];?>
		</center></td></tr>
			<input type=hidden name=v_name value="<?php echo $_POST[v_name];?>">
			<input type=hidden name=v_type value="<?php echo $_POST[v_type];?>">
			<input type=hidden name=v_m value="<?php echo $_POST[v_m];?>">
<?php
	for($i=1;$i<($_POST['v_m']+1);$i++){
?>
	<tr>
		<td width="152" height="29" align="right">选择项<?php echo $i;?>内容：</td>
		<td width="281" ><input type=text name=r[]></td>
		<td width="52" align="right" >颜色：</td>
		<td width="102">
			<select size=1 name=c[]>
				<option value=1>红</option>
				<option value=2>蓝</option>
				<option value=3>绿</option>
				<option value=4>黄</option>
				<option value=5>紫</option>
			</select>		</td>
	</tr>
<?php } ?>
	<tr>
		<td height="29" colspan="4"><center>
			<input type=button value="上一步" onclick=history.go(-1)>
			<input type=submit value="下一步"></center>
		</td>
	</tr>
</form>
</table>
<?php
}else{
	$v_name=$_POST[v_name];		//获取投票主题的内容
	$v_type=$_POST[v_type];		//获取投票类型
	$v_m=$_POST[v_m];			//获取投票选项的项数
	for($i=0;$i<$v_m;$i++){
		$r[]=$_POST[r][$i];
		$c[]=$_POST[c][$i];
	}
	$sql="insert into tb_vote(tb_vote_name,tb_vote_type,tb_vote_num) values('$v_name','$v_type','$v_m')";
	mysql_query($sql,$conn);
	$sqls="select max(tb_vote_id) from tb_vote";
	$result=mysql_query($sqls,$conn);
	$row=mysql_fetch_array($result);
	for($i=0;$i<$v_m;$i++){
		$temp=$r[$i];       //获取投票选项内容
		$temp2=$c[$i];		//获取投票选项的颜色
		$sqles="insert into tb_vote_record(tb_vote_id,tb_record_name,tb_record_color) values('$row[0]','$temp','$temp2')";
		mysql_query($sqles,$conn);
	}
echo "<meta http-equiv=\"refresh\" content=\"2; url=delete.php\">";
echo "投票选项创建成功！两秒后返回";
}
?>




</td>
      </tr>
      <tr>
        <td height="59"></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="90"></td>
  </tr>

</table>
</center>
</body>
</html>

