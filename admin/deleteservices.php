<?php
    require_once 'class/common.class.php';
    require_once 'class/services.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $services = new services;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$services->id = $id;
    	$ask = $services->deleteservices();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Deleted successfully')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Delete unsuccessfully')</script>";
    	}
    }
?>
<script> window.location="listservices.php" </script>