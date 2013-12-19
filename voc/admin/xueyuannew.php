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
<div id="navdiv" style=" width:805px; height:30px; background-color:#817158; line-height:30px; text-align:center; font-weight: bolder; color:#ede6bc;"><a href="index.php?act=pic" class="alink">精彩图集</a> | <a href="index.php?act=type" class="alink">相册类别</a> | <a href="index.php?act=upload" class="alink">上传图片</a> | <a href="../vote/delete.php" target="_blank" class="alink">管理投票</a> | <a href="xueyuannew.php" class="alink">新增学员</a> | <a href="xueyuanold.php"  class="alink"> 管理现有学员 </a>| <a href="saicheng.php" class="alink">赛程管理</a> | <a href="../logout.php" class="alink"> 退出 </a></div>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<html>
<body>


<form action="insert.php" method="post" style = " width:300px; text-align:left  ">
<input type="hidden" name="id" />
姓名：<br><input type="text" name="name" /><br>
详细信息：<br><input type="text" name="detail" /><br>
导师：<br><input type="text" name="teacher" /><br>
状态（三十二强为1，四强为2，顺利晋级为0）：<br><input type="text" name="status" /><br>
头像图片名：<br><input type="text" name="pic" /><br><br>
<input type="submit"  value="提交"/>
</form>

</body>
</html>

<div style="width:805px; height:60px; text-align:center; line-height:25px; padding:5px; border:2px #d6c9a7 solid; color:#53360e;">由“妈妈说组名起短了容易挂”倾力之作！<br>如有雷同，纯属巧合</div>

</div>
</body>
</html>
