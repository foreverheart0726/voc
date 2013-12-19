<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>赛程一览</title>
</head>
<body>

<div id="contain">
<?Php
	include 'top.html';
?>
<div id="navdiv" style=" width:1348px; height:50px; background-color:#000000; line-height:50px; text-indent:0px; text-align:center; font-size: 24px ;font-weight: bolder; color:#FFFFFF;cursor:hand;"><a href="daoshi.php" class="alink">  导  师  资  料  </a> | <a href="xueyuan.php" class="alink">  学  员  资  料  </a> | <a href="index.php" class="alink">  返  回  首  页  </a> | <a href="vote/index.php" class="alink" >  投  票  吧  亲  </a></div>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<br><br>
<?php
	$id=mysql_connect('localhost','root','root');
    mysql_select_db('match',$id);	
	mysql_query("set names utf8");
?>
<table border="1" align="center" >
<tr>
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
					echo $row['stage'];
				echo "</td>";
				echo "<td height='50' width = '300' align='center' style = 'font-size:18px' >";
					echo $row['date'];
				echo "</td>";
			echo "</tr> ";
	}
?>

</table>



<p />
<div align="center" ><?php include 'bottom.html';?></div>

</div>
</body>
</html>
