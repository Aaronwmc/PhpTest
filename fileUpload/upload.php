<?php header('Content-Type:text/html;charset=utf-8');?>
<?php
	if(!isset($_FILES['file']))     //跳转方式1
	{
		$url = "./index.php";
		echo "<script language='javascript'type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	if(!isset($_FILES['file']))
	{
		header("Location:./index.php"); //跳转方式2
	} 
	if(!isset($_FILES['file']))
	{
		echo '上传错误，3秒后跳转回上一页'; 
	?>
		<!-- 定时跳转 -->
		<meta http-equiv="refresh" content="3;url=./index.php">  <!-- 跳转方式3 -->        
	<?php 
	}else if($_FILES['file']['error']>0)
	{
		echo 'Error:'.$_FILES['file']['error'].'<br>';
	}else{
		echo 'Name:'.$_FILES['file']['name'].'<br>';
		echo 'Type:'.$_FILES['file']['type'].'<br>';
		echo 'Size:'.$_FILES['file']['size'].'<br>';
		echo 'Path:'.$_FILES['file']['tmp_name'].'<br>';
	}