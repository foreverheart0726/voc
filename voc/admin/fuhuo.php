<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("student", $con);
mysql_query("set names utf8");
$sql="UPDATE student SET status = '顺利晋级' where ID = '$_POST[id]' ";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<meta http-equiv=\"refresh\" content=\"0; url=xueyuan.php\">";
mysql_close($con)
?>