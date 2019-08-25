<?php
    require_once 'class/common.class.php';
    require_once 'class/skills.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $skills = new skills;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$skills->id = $id;
    	$ask = $skills->deleteskills();
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
<script> window.location="listskills.php" </script>