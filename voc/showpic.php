<?php
	session_start();
	header("Content-Type:text/html;charset=UTF-8");
	include_once 'conn/conn.php';
	include_once 'admin/inc/func.php';
	$picpath = $_GET['picpath'];
	$smallact = $_GET['smallact'];
	$tmppath = substr(strrchr($picpath,'/'),1);
	$psql = "select id,picname,bewrite,upname from tb_photo where picpath = '".$tmppath."'";
	$parr = $conne->getRowsRst($psql);
?>
<img id = "bigimg" src="<?php echo $picpath; ?>" width="<?php echo getWidth($picpath,640,480); ?>" height="<?php echo getHeight($picpath,640,480); ?>" style="cursor:hand;" onclick="lookpic()" /><div style="line-height:25px;">图片名称：&nbsp;<?php echo $parr['picname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;图片格式：<?php echo getWidth($picpath); ?> * <?php echo getHeight($picpath); ?>&nbsp;&nbsp;</div><div align="left" style="line-height:25px; text-indent:20px;">图片描述：&nbsp;<?php echo $parr['bewrite']; ?></div>