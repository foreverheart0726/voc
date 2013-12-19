<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("match", $con);
mysql_query("set names utf8");

$sql="INSERT INTO match1 (id,date,stage) VALUES ('$_POST[id]','$_POST[date]','$_POST[stage]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Success!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=saicheng.php\">";
mysql_close($con)
?>