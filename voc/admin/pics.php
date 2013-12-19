<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'inc/func.php';
	include_once 'inc/admin.php';
?>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript" src="js/member.js"></script>
<script language="javascript" src="js/xmlhttprequest.js"></script>
<script>
function chktypepwd(tid){
	pwdobj = document.getElementById('typepwdtxt');
	if(pwdobj.value == ''){
		alert('请输入密码!!');
		pwdobj.focus();
		return false;
	}
	url = 'chkpwd.php?tid='+tid+'&typepwd='+pwdobj.value+'&rnd='+Math.random();
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
			if(xmlhttp.responseText == 1){
				location.reload();
			}else{
				alert('密码输入错误!!');
			}
		}
	}
	xmlhttp.send(null);
}
</script>
<?php
	$smallact = $_GET['smallact'];
	/*$typesql = "select id,typename from tb_type";
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();*/
	if( !empty($_GET['smallact']) and !is_null($_GET['smallact'])){
		$levelarr = $conne->getRowsRst('select level,typepwd from tb_type where id = '.$smallact,0);
		$conne->close_rst();
		if($levelarr['level'] != 0){
			if($_SESSION['typepwd'] != $levelarr['typepwd']){
?>
		<div align="center">请输入密码：<input id="typepwdtxt" name="typepwdtxt" type="password" class="txt"  />&nbsp;<button onclick="chktypepwd(<?php echo $smallact; ?>)" class="btn">进入</button></div>
<?php
			exit();
			}
		}
	
		$picsql = "select id,picname,picpath,bewrite from tb_photo where typename = ".$smallact;
		$picarr = $conne->getRowsArray($picsql);
		$conne->close_rst();
		if($picarr != ''){
?>
<div id="contain">
<?Php
	include 'top.html';
?>
<div style=" width:809px; height:80px; background-image:url(../images/showalb.gif); background-position: center; vertical-align:middle; background-repeat:no-repeat;"></div>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="5">&nbsp;</td>
<td height="50" width="15"><button id="rightfly" style=" height:60; width:15px; border:1px #000000 solid; background-color:#f0f0f0;">&lt;</button></td>
<td width="5">&nbsp;</td>
<td>
<div id="outdiv" style="overflow:hidden;width:<?php echo (count($picarr) < 10?(57*count($picarr)):'566'); ?>;">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="50"  id="indiv">
	  	<table border="0"  cellspacing="2" cellpadding="2" >
			<tr align="center">
	<?php
			foreach($picarr as $key => $picvalue){
	?>
		   <td valign="middle" bgcolor="#FFFFFF"><div align="center"><img id="img<?php echo $key; ?>" src="<?php echo '../uppics/breviary/'.$picvalue['picpath']; ?>" width="50px" height="50px" border="0" onclick="changeimg(<?php echo $key; ?>)" style="cursor:hand;"/></div></td>
	<?php
			}
	?>
			</tr>
		</table>
	  </td>
    </tr>
  </table>
</div>
</td>
<td width="5">&nbsp;</td>
<td><button id="leftfly" style=" height:60; width:15px; border:1px #000000 solid; background-color:#f0f0f0;">&gt;</button></td>
</tr>
</table>
<table border="1" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td align="center" valign="middle"><div id="showpic"><img id = "bigimg" src="<?php echo '../uppics/'.$picarr[0]['picpath']; ?>" width="<?php echo getWidth('../uppics/'.$picarr[0]['picpath'],640,480); ?>" height="<?php echo getHeight('../uppics/'.$picarr[0]['picpath'],640,480); ?>" style="cursor:hand;" onclick="lookpic()" /><div align="center" style=" line-height:25px;">图片格式：<?php echo getWidth('../uppics/'.$picarr[0]['picpath']); ?> * <?php echo getHeight('../uppics/'.$picarr[0]['picpath']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ' <a onclick="javascript:if(!confirm(\'是否删除?\')){}else{ location=\'del.php?smallact='.$smallact.'&picpath=../uppics/'.$picarr[0]['picpath'].'\';}" style=" cursor: hand;">删除</a>'; ?>&nbsp;&nbsp;&nbsp;<a style="cursor:hand;" onclick="setindexpic(<?php echo $smallact; ?>)">设为封面</a></div></div></td>
	</tr>

</table>
</div>
<script language="javascript">
$('img0').style.border = '2px #0000FF solid';
var idnum = '0';
var totalnum = <?php echo count($picarr); ?>;
var uid = '<?php echo $_GET['uid']; ?>';

function lookpic(){
open($('bigimg').src,'_blank','',false);
}
function changeimg(key){
		$('img'+idnum).style.border = '';
		$('img'+(key)).style.border=" 2px #0000FF solid";
		if(key < idnum){
			if(indiv.offsetWidth-outdiv.scrollLeft<=0)
				outdiv.scrollLeft-=indiv.offsetWidth;
			else{
				outdiv.scrollLeft -= (56 * (idnum - key));
			}
		}else if(key > idnum){
			if(indiv.offsetWidth-outdiv.scrollRight<=0)
				outdiv.scrollLeft-=indiv.offsetWidth;
			else{
				outdiv.scrollLeft += (56 * (key - idnum));
			}
		}
		imgpath = '../uppics'+$('img'+key).src.substr($('img'+key).src.lastIndexOf('/'));
		url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath+"&uid="+uid;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = changepic;
		xmlhttp.send(null);
		idnum = key;
}
function LeftMarqueez(){
	if(idnum < (totalnum - 1)){
		$('img'+idnum).style.border = '';
		$('img'+(++idnum)).style.border=" 2px #0000FF solid";
	}
	if(indiv.offsetWidth-outdiv.scrollLeft<=0)
		outdiv.scrollLeft-=indiv.offsetWidth;
	else{
		outdiv.scrollLeft += 56;
	}
	imgpath = '../uppics'+$('img'+idnum).src.substr($('img'+idnum).src.lastIndexOf('/'));
		url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = changepic;
		xmlhttp.send(null);
}
function RightMarqueez(){
	if(idnum > 0){
		$('img'+idnum).style.border = '';
		$('img'+(--idnum)).style.border=" 2px #0000FF solid";
	}
	if(indiv.offsetWidth-outdiv.scrollRight<=0)
		outdiv.scrollLeft-=indiv.offsetWidth;
	else{
		outdiv.scrollLeft -= 56;
	}
	imgpath = '../uppics'+$('img'+idnum).src.substr($('img'+idnum).src.lastIndexOf('/'));
	url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = changepic;
	xmlhttp.send(null);
}
function startautopage(){
	if(idnum < (totalnum - 1)){
		$('img'+idnum).style.border = '';
		$('img'+(++idnum)).style.border=" 2px #0000FF solid";
		if(indiv.offsetWidth-outdiv.scrollLeft<=0){
			outdiv.scrollLeft-=indiv.offsetWidth;
		}else{
			outdiv.scrollLeft += 56;
		}
		imgpath = '../uppics'+$('img'+idnum).src.substr($('img'+idnum).src.lastIndexOf('/'));
		url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = changepic;
		xmlhttp.send(null);
	}else{
		alert('播放结束');
		clearInterval(timer);
		return false;
	}
}
function changepic(){
	if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
		$('showpic').innerHTML = xmlhttp.responseText;
	}
}

$('rightfly').onclick = RightMarqueez;
$('leftfly').onclick = LeftMarqueez;
$('autopage').onclick = function(){
	if($('autopage').innerText == '自动翻页'){
		if($('secondtxt').value == ''){
			alert('请输入间隔秒数!');
			$('secondtxt').focus();
			return false;
		}
		$('autopage').innerHTML = '停止翻页';
		timer = setInterval("startautopage()",($('secondtxt').value*1000));
	}else if($('autopage').innerText == '停止翻页'){
		alert('停止自动播放');
		$('autopage').innerHTML = '自动翻页';
		clearInterval(timer);
	}
}
function setindexpic(tid){
	indexpic = $('bigimg').src.substr($('bigimg').src.lastIndexOf('/')+1);
	url = 'setindexpic.php?tid='+tid+'&indexpic='+indexpic;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
			msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('设置成功');
			}else if(msg == '2'){
				alert('该张图片已经是首页');
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}
</script>
<?php
	}
}
?>