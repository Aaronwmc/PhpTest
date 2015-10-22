<?php
	header('Content-Type:text/html;charset=utf-8');
	$conn = mysqli_connect('localhost','root','123123','mec');
	$select = 'select id,Name,Info from info';
	$result = mysqli_query($conn, $select);
	while($row = mysqli_fetch_array($result))
	{
		echo $row['id'].' '.$row['Name'].' '.$row['Info'].'<br>';
	}
	mysqli_close($conn);