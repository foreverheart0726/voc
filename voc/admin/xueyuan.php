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
<?php
function status($mstatus)
{
	echo $mstatus;
}

?>
<div id="navdiv" style=" width:805px; height:30px; background-color:#817158; line-height:30px;  text-align:center; font-weight: bolder; color:#ede6bc;"><a href="index.php?act=pic" class="alink">精彩图集</a> | <a href="index.php?act=type" class="alink">相册类别</a> | <a href="index.php?act=upload" class="alink">上传图片</a> | <a href="../vote/delete.php" target="_blank" class="alink">管理投票</a> | <a href="xueyuan.php"  class="alink">  学员管理 </a>| <a href="saicheng.php" class="alink">赛程管理</a> | <a href="../logout.php" class="alink"> 退出 </a></div>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<form action="insert.php" method="post" >
<input type="hidden" name="id" />
姓名：<br><input type="text" name="name" /><br>
详细信息：<br><input type="text" name="detail" /><br>
导师：<br><input type="text" name="teacher" /><br>
状态（直接输入比赛状态文字）：<br><input type="text" name="status" /><br>
头像图片名：<br><input type="text" name="pic" /><br><br>
<input type="submit"  value="提交"/>
</form>

<form action="delete.php" method="post"  text-align:center> <input type="text" name="id"/><br><input type='submit'  value='输入ID删除学员'/></form><br>
<form action="taotai.php" method="post"  text-align:center> ID:<br><input type="text" name="id"/><br>淘汰阶段:<br><input type="text" name="status"/><br><input type='submit'  value='输入ID淘汰学员'/></form><br>
<form action="fuhuo.php" method="post"  text-align:center> <input type="text" name="id"/><br><input type='submit'  value='输入ID复活学员'/></form>
<?php
	$id=mysql_connect('localhost','root','root');
    mysql_select_db('student',$id);	
	mysql_query("set names utf8");
?>
	<div style = "font-size:24px">
	<table border="1"  >
<tr>
	<td height="24" align="center" style = "font-size:18px">ID</td>
	<td height="24" align="center" style = "font-size:18px">学员姓名</td>
	<td height="24" align="center" style = "font-size:18px">比赛状态</td>
</tr> 

<?php
	$typesql = "select ID,name,detail,status,teacher,pic from student order by ID";
	$result = mysql_query($typesql);
	while($row = mysql_fetch_array($result))
	{
			echo "<tr >";
				echo "<td height='50' width = '100' align='center' style = 'font-size:18px' >";
					echo $row['ID'];
				echo "</td>";
				echo "<td height='50' width = '300' align='center'  style = 'font-size:18px'>";
					echo "<img src='../images/";
					echo $row['pic'] ;
					echo ".jpg'  width = '100' height = '100'/>";
					echo "<br>";
					echo $row['name'] ;
					echo "</div> ";
				echo "</td>";
				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
				status($row['status']);
				echo "</td>";
			echo "</tr> ";
	}
?>

</table>
<br><br>
<div style="width:805px; height:60px; text-align:center; line-height:25px; padding:5px; border:2px #d6c9a7 solid; color:#53360e;">由“妈妈说组名起短了容易挂”倾力之作！<br>如有雷同，纯属巧合</div>


</div>
</body>
</html>
