<?php
	session_start();
	header('Content-Type:text/html;charset=UTF-8');
	include_once 'conn/conn.php';
	include_once 'config.php';
	include_once 'inc/admin.php';
	$act = $_GET['act'];
	if($act == 'del'){
		$chk = $_POST['chk'];
		$sql = "delete from tb_uppics where id = -1 ";
		$cont = '删除操作，删除了图片：';
		if(!empty($chk)){
			foreach($chk as $value){
				$linkname = $conne->getFields('select id,picpath from tb_uppics where id = '.$value,1);
				echo "<script>alert('".$_SERVER['DOCUMENT_ROOT'].ROOT.PIC.$linkname."');</script>";
				if(file_exists($_SERVER['DOCUMENT_ROOT'].ROOT.PIC.$linkname)){
					unlink($_SERVER['DOCUMENT_ROOT'].ROOT.PIC.$linkname);
					$cont .= $value.' ';
					$sql .= "or id = ".$value." ";
				}
			}
			$num = $conne->uidRst($sql);
			if(!empty($num)){
				echo "<script>alert('删除成功');location='pics.php';</script>";
			}else{
				echo "<script>alert('该图片已删除！');location='pics.php';</script>";
			}
		}
	}
?>