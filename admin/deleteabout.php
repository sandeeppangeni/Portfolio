<?php
    require_once 'class/common.class.php';
    require_once 'class/about.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $about = new about;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$about->id = $id;
    	$ask = $about->deleteabout();
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
<script> window.location="listabout.php" </script>