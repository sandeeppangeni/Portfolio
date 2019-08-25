<?php
    require_once 'class/common.class.php';
    require_once 'class/contact.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $contact = new contact;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$contact->id = $id;
    	$ask = $contact->deletecontact();
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
<script> window.location="listcontact.php" </script>