<?php
    require_once 'class/common.class.php';
    require_once 'class/testimonial.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $testimonial = new testimonial;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$testimonial->id = $id;
    	$ask = $testimonial->deletetestimonial();
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
<script> window.location="listtestimonial.php" </script>