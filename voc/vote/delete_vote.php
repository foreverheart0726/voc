<?php include_once("conn/conn.php");
if(!$_GET[id]){
	echo "没有指定ID！";
	exit();
}else{
	$sql="delete from tb_vote where tb_vote_id='".$_GET[id]."'";			//显示所有投票项
	if(mysql_query($sql,$conn)){				//发送SQL请求
		echo "删除投票主题成功！";
	}else{
		echo "删除投票主题出错！";
	}
	$sql2="delete from tb_vote_record where tb_record_id='".$_GET[id]."'";			//显示所有投票项
	if(mysql_query($sql2,$conn)){				//发送SQL请求
	
		echo "删除投票选项成功！";
	}else{
		echo "删除投票选项出错！";
	}
	echo "<meta http-equiv=\"refresh\" content=\"2; url=delete.php\">";
	echo "成功删除投票选项记录！两秒后返回";
}
?>
