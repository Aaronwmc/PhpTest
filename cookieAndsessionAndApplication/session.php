<?php
	session_start();
	if(isset($_SESSION['suser']))
	{
		echo $_SESSION['suser'];
	}
	
	if(isset($_SESSION['num']))
	{
		echo $_SESSION['num'];
		$_SESSION['num'] += 1;
		if($_SESSION['num']>40)
		{
			unset($_SESSION['num']);
		}
	}else{
		$_SESSION['num'] = 0;
	}