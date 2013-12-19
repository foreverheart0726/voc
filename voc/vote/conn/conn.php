<?php 
$conn=mysql_connect("localhost","root","root") or die('连接失败:' . mysql_error());
if(mysql_select_db("db_vote",$conn))
  echo "";
  else
  echo ('数据库选择失败:' . mysql_error());
mysql_query("set names utf8");
?>