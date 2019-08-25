<?php
    require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $admin = new admin;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$admin->id = $id;
    	$ask = $admin->deleteadmin();
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
<script> window.location="viewusers.php" </script>