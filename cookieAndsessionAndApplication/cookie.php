<?php
	if(isset($_COOKIE['cuser']))
	{
		echo $_COOKIE['cuser'].'<br>';
	}
	if(isset($_COOKIE['rcuser']))
	{
		echo $_COOKIE['rcuser'];
		setrawcookie('rcuser','',time()-100);
	}