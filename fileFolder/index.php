<?php
	$fileName = 'testFile';
	if(!file_exists('./'.$fileName))
	{
		$file = fopen($fileName,'a') or die('Unable to open file');
	}else{
		$file = fopen($fileName, 'a+') or die('Unable to open file');
		/* while(!feof($file)){
			echo fgets($file).'<br>';
		} */
		$arr = array();
		$arr = file($fileName);
		print_r($arr);
	}
	date_default_timezone_set('PRC');
	fwrite($file,"hello ".date('Y-m-d H:i:s')."\r\n");
	fclose($file);