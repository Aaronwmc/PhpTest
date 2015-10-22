<?php
	header("Content-Type: text/html;charset=utf-8");
	$xml = simplexml_load_file('myXml.xml');
	echo 'simpleXml<br>';
	echo $xml->to.'<br>';
	echo $xml->from.'<br>';
	echo $xml->heading.'<br>';
	echo $xml->body.'<br>';
	echo $xml->ee->hh.'<br>';