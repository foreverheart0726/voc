<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("student", $con);
mysql_query("set names utf8");

$sql="INSERT INTO student (ID, name, detail, teacher, status, pic) VALUES ('$_POST[id]','$_POST[name]','$_POST[detail]','$_POST[teacher]','$_POST[status]','$_POST[pic]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Success!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=xueyuan.php\">";
mysql_close($con)
?>