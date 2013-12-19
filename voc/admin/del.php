<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	$smallact = $_GET['smallact'];
	$picpath = $_GET['picpath'];
	$former = substr(strrchr($picpath,'/'),1);
	$sql = 'delete from tb_photo where picpath = "'.$former.'"';
	$num = $conne->uidRst($sql);
	if(file_exists($picpath)){
		unlink($picpath);
	}
	if(file_exists('uppics/breviary/'.$former)){
		unlink('uppics/breviary/'.$former);
	}
	if($num == 1){
		echo "<script>alert('删除成功！');location='index.php?act=pic&smallact=".$smallact."';</script>";
	}else{
		echo "<script>alert('删除失败！');history.go(-1);</script>";
	}
	
?>