<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("match", $con);
mysql_query("set names utf8");

$sql="DELETE FROM match1 where ID = '$_POST[id]' ";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<meta http-equiv=\"refresh\" content=\"0; url=saicheng.php\">";
mysql_close($con)
?>