<?php
	require_once 'config/config.php';
	require_once 'libs/controller.php';
	require_once 'libs/model.php';
	
	
	
	$url=[];
	if (isset($_GET['p'])) 
	{
		$url=explode('/', $_GET['p']);
	}
	else
	{
		$url[0]='home';
	}
	
	$count=count($url);
	if($count==1)
	{
		if($url[0]=='home')
		{
			require_once 'controller/homecontroller.php';
			$obj=new homecontroller;
			$obj->index();
		}
		
	}
	
?>