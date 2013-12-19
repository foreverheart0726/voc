<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>学员资料</title>
</head>
<body>

<div id="contain">
<?Php
	include 'top.html';
?>
<?php
function status($mstatus)
{
	echo $mstatus ;
}

?>
<div id="navdiv" style=" width:1348px; height:50px; background-color:#000000; line-height:50px; text-indent:0px; text-align:center; font-size: 24px ;font-weight: bolder; color:#FFFFFF;cursor:hand;"><a href="daoshi.php" class="alink">  导  师  资  料  </a> | <a href="index.php" class="alink">  返  回  首  页  </a> | <a href="saicheng.php" class="alink">  赛  程  一  览  </a> | <a href="vote/index.php" class="alink" >  投  票  吧  亲  </a></div>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<?php
	$id=mysql_connect('localhost','root','root');
    mysql_select_db('student',$id);	
	mysql_query("set names utf8");
?>
	<div style = "font-size:24px">
	<br>
	1.汪峰组</div>
	<table border="1" align="center" >
<tr>
	<td height="24" align="center" style = "font-size:18px">学员姓名</td>
	<td height="24" align="center" style = "font-size:18px">详细信息</td>
	<td height="24" align="center" style = "font-size:18px">比赛状态</td>
</tr> 

<?php
	$typesql = "select ID,name,detail,status,teacher,pic from student";
	$result = mysql_query($typesql);
	while($row = mysql_fetch_array($result))
	{
		if($row['teacher'] == "汪峰")
		{

			echo "<tr >";
				echo "<td height='50' width = '300' align='center'  style = 'font-size:18px'>";
					echo "<img src='images/";
					echo $row['pic'] ;
					echo ".jpg' width = '100' height = '100'/>";
					echo "<br>";
					echo $row['name'];
					echo "</div> ";
				echo "</td>";
					
				echo "<td height='50' width = '600' align='center' style = 'font-size:18px' >";
					echo $row['detail'];
					if($row['name'] == "张恒远")
					echo "<br><a href='play.php' target = '_blank'><img src='images/play.png' align='center' height = '12'  width = '12'></a>";
				echo "</td>";

				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
					status($row['status']);
				echo "</td>";
			echo "</tr> ";
			echo "<br>";
		}
	}
	
?></table>
<div style = "font-size:24px">
	2.那英组</div>
	<table border="1"  align="center">
<tr>
	<td height="24" align="center" style = "font-size:18px">学员姓名</td>
	<td height="24" align="center" style = "font-size:18px">详细信息</td>
	<td height="24" align="center" style = "font-size:18px">比赛状态</td>
</tr> 

<?php
	$typesql = "select ID,name,detail,status,teacher,pic from student";
	$result = mysql_query($typesql);
	while($row = mysql_fetch_array($result))
	{
		if($row['teacher'] == "那英")
		{
			
			echo "<tr >";
				echo "<td height='50' width = '300' align='center'  style = 'font-size:18px'>";
					echo "<img src='images/";
					echo $row['pic'] ;
					echo ".jpg' width = '100' height = '100'/>";
					echo "<br>";
					echo $row['name'];
					echo "</div> ";
				echo "</td>";
					
				echo "<td height='50' width = '600' align='center' style = 'font-size:18px' >";
					echo $row['detail'];
				echo "</td>";

				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
					status($row['status']);
				echo "</td>";
			echo "</tr> ";
			echo "<br>";
			
		}
	}
?></table>
<div style = "font-size:24px">
	3.庾澄庆组</div>
	<table border="1" align="center" >
<tr>
	<td height="24" align="center" style = "font-size:18px">学员姓名</td>
	<td height="24" align="center" style = "font-size:18px">详细信息</td>
	<td height="24" align="center" style = "font-size:18px">比赛状态</td>
</tr> 

<?php
	$typesql = "select ID,name,detail,status,teacher,pic from student";
	$result = mysql_query($typesql);
	while($row = mysql_fetch_array($result))
	{
		if($row['teacher'] == "庾澄庆")
		{
			echo "<tr >";
				echo "<td height='50' width = '300' align='center'  style = 'font-size:18px'>";
					echo "<img src='images/";
					echo $row['pic'] ;
					echo ".jpg' width = '100' height = '100'/>";
					echo "<br>";
					echo $row['name'];
					echo "</div> ";
				echo "</td>";
					
				echo "<td height='50' width = '600' align='center' style = 'font-size:18px' >";
					echo $row['detail'];
				echo "</td>";

				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
				status($row['status']);
				echo "</td>";
			echo "</tr> ";
			echo "<br>";
			
		}
	}
	
?></table>
<div style = "font-size:24px">
	4.张惠妹组</div>
	<table border="1" align="center" >
<tr>
	<td height="24" align="center" style = "font-size:18px">学员姓名</td>
	<td height="24" align="center" style = "font-size:18px">详细信息</td>
	<td height="24" align="center" style = "font-size:18px">比赛状态</td>
</tr> 

<?php
	$typesql = "select ID,name,detail,status,teacher,pic from student";
	$result = mysql_query($typesql);
	while($row = mysql_fetch_array($result))
	{
		if($row['teacher'] == "张惠妹")
		{
			
			echo "<tr >";
				echo "<td height='50' width = '300' align='center'  style = 'font-size:18px'>";
					echo "<img src='images/";
					echo $row['pic'] ;
					echo ".jpg' width = '100' height = '100'/>";
					echo "<br>";
					echo $row['name'];
					echo "</div> ";
				echo "</td>";
					
				echo "<td height='50' width = '600' align='center' style = 'font-size:18px' >";
					echo $row['detail'];
				echo "</td>";

				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
					status($row['status']);
				echo "</td>";
			echo "</tr> ";
			echo "<br>";
		
		}
	}
	
?></table>
<p />
<div align="center"><?php include 'bottom.html'; ?></div>

</div>
</body>
</html>
