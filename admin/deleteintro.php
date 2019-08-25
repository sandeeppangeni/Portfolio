<?php
    require_once 'class/common.class.php';
    require_once 'class/intro.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $intro = new intro;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$intro->id = $id;
    	$ask = $intro->deleteintro();
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
<script> window.location="listintro.php" </script>