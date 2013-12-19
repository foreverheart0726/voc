<?php session_start();
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";
include_once("conn/conn.php");
$id=$_POST[id];				//获取投票主题的ID
$v_type=$_POST[v_type];		//获取投票类型
$r=$_POST[r];
if($_SESSION[vote_session]==$id){			//通过SESSION限制重复投票
	echo "<script  charset=UTF-8>alert('您不可以重复投票，请重新登录！'); history.back();</script>";
}else{
	if($v_type==0){			//执行单选投票的更新操作
		$sql2="update tb_vote_record set tb_record_num=tb_record_num+1 where tb_record_id=$r";
		mysql_query($sql2,$conn);
	}else{
		for($i=0;$i<count($r);$i++){		//执行多选投票的更新操作
			$temp=$r[$i];
			$sql2="update tb_vote_record set tb_record_num=tb_record_num+1 where tb_record_id=$temp";
			mysql_query($sql2,$conn);
		}
	}
	$_SESSION[vote_session]=$id;
echo "<meta http-equiv=\"refresh\" content=\"2; url=look_vote.php?id=$id\">";
echo "投票成功！两秒后返回";
}
?>
