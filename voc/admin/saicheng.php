<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>Administrator</title>
</head>
<body>

<div align="center">
<?Php
	include 'top.html';
?>
<div id="navdiv" style=" width:805px; height:30px; background-color:#817158; line-height:30px; text-align:center; font-weight: bolder; color:#ede6bc;"><a href="index.php?act=pic" class="alink">精彩图集</a> | <a href="index.php?act=type" class="alink">相册类别</a> | <a href="index.php?act=upload" class="alink">上传图片</a> | <a href="../vote/delete.php" target="_blank" class="alink">管理投票</a>| <a href="xueyuan.php"  class="alink">  学员管理 </a>| <a href="saicheng.php" class="alink">赛程管理</a> | <a href="../logout.php" class="alink"> 退出 </a></div>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<html>
<body>


<form align="center"action="insertsaicheng.php" method="post">
新增节目顺序(ID):<br><input type="text" name="id" /><br>
新增节目安排:<br><input type="text" name="stage" /><br>
日期:<br><input type="text" name="date" /><br>
<input type="submit"  value="提交"/>
</form>
<br>
<form align="center" action="deletes.php" method="post"  text-align:center> <input type="text" name="id"/><input type='submit'  value='输入ID删除比赛'/></form>
<?php
	$id=mysql_connect('localhost','root','root');
    mysql_select_db('match',$id);	
	mysql_query("set names utf8");
?>
<table border="1" align="center" >
<tr>
	<td width="100" height="24" align="center" style = "font-size:24px">节目顺序</td>
  <td width="500" height="24" align="center" style = "font-size:24px">节目安排</td>
  <td height="24" width="500" align="center" style = "font-size:24px">直播日期</td>
</tr> 
<?php
	$typesql = "select id,stage,date from match1 order by id";
	$result = mysql_query($typesql);
	while($row = mysql_fetch_array($result))
	{
			echo "<tr >";
				echo "<td height='50' width = '100' align='center' style = 'font-size:18px' >";
					echo $row['id'];
				echo "</td>";
				echo "<td height='50' width = '100' align='center' style = 'font-size:18px' >";
					echo $row['stage'];
				echo "</td>";
				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
					echo $row['date'];
				echo "</td>";
			echo "</tr> ";
	}
?>

</table>
<br><br>
</body>
</html>

<div style="width:805px; height:60px; text-align:center; line-height:25px; padding:5px; border:2px #d6c9a7 solid; color:#53360e;">由“妈妈说组名起短了容易挂”倾力之作！<br>如有雷同，纯属巧合</div>

</div>
</body>
</html>
