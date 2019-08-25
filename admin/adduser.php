<?php
	require_once 'class/common.class.php';
	require_once 'class/admin.class.php';
	require_once 'layout/header.php';
	$admin=new admin;
	$err=[];
	if(isset($_POST['submit']))
	{
		if(isset($_POST['name'] &&! empty($_POST['name']))
		{
			$admin->name=$_POST['name'];
		}
		else
		{
			$err[0] = "name field cannot be empty";
		}

		if(isset($_POST['username']&& !empty($_POST['username']))
		{
			$admin->username = $_POST['username'];
		}
		else
		{
			$err[0] = "username must be entered";
		}
		if (isset($_POST['email'])) && !empty($_POST['email'])
		{
			$admin->email = $_POST['email']
		}
		else 
		{
			$err[4] = "email cannot be entered";
		}

		if (isset($_POST['password'])) && !empty($_POST['password'])
		{
			$admin->password = $_POST['password']
		}
		else 
		{
			$err[4] = "password cannot be empty";
		}

if (count($err)=0)
{
	$admin->salt=uniqid();
	$admin->password = sh1($admin->salt.$password);
	$salt = $admin->insertuser();
	if($ask==1)
	{
		echo "<script>alert('inserted sucessively')"</script>
	}
	else
	{
		echo "<script>alert('failed to insert')"</script>	
	}
}


	}


?> 