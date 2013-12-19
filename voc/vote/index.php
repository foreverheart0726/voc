<?php 
include_once("conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="../css/style.css" />

<title>投票吧亲</title>
</head>

<div style="background-image: url(../images/top.jpg); background-position:top; background-repeat:no-repeat; width:1348px; height:286px;"></div>
<body>
<div id="contain">
<div id="navdiv" style=" width:1348px; height:50px; background-color:#000000; line-height:50px; text-indent:0px; text-align:center; font-size: 24px ;font-weight: bolder; color:#FFFFFF;cursor:hand;"><a href="../daoshi.php" class="alink"> 导 师 资 料 </a> | <a href="../xueyuan.php" class="alink"> 学 员 资 料 </a> | <a href="../saicheng.php" class="alink"> 赛 程 一 览 </a> | <a href="../index.php" class="alink"> 返 回 首 页 </a></div>
<br>
<div id="navdiv" style=" width:1348px; height:50px;  line-height:50px; text-indent:0px; text-align:center; font-size: 24px ;font-weight: bolder; color:#ede6bc;">

      <tr>
        <td height="97"></td>
        <td rowspan="2">

      </tr>
      <tr>
        <td align="center" valign="middle">	
		<?php
				$sql="select * from tb_vote";
				$result=mysql_query($sql,$conn);		//执行查询语句，从数据库中读取投票主题的数据
				$rows=mysql_fetch_array($result);
				if($rows==0){
					echo "没有投票主题的数据！";
				}else{
		?>
		</div>
		<table align="center" width="800" border='1' cellpadding="0" cellspacing="0"    style="line-height:50px; text-indent:0px; text-align:center; font-size: 24px ;font-weight: bolder; color:#0000ff;" >
				<tr>
					<td width='0' height="24" align="center" style = "font-size:24px" >项</td>
					<td width='0' align="center" style = "font-size:24px" >
							投票主题名称</td>
				</tr>
				<?php 
					$i=0;
					$sql="select * from tb_vote";
					$result=mysql_query($sql,$conn);
					while($row=mysql_fetch_array($result)){
						$i++;
				?>
		<tr>
				<td height="24" align="center" style = "font-size:24px">
				第<?php echo $i;?>条</td>
				<td height="24" align="center" style = "font-size:24px">
				<a href="look_vote.php?id=<?php echo $row[tb_vote_id];?>" target="_blank" ><?php echo $row[tb_vote_name];?></a>
				</td>
				
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
        <td width = "626" height="59"></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
<p />
<div align="center"><?php include '../bottom.html'; ?></div>
</div>
</body>

</html>