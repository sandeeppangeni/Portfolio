

<?php
	require_once 'class/common.class.php';
	require_once 'class/admin.class.php';
	require_once "class/session.class.php";
	sessionhelper::checklogin();
	require_once 'layout/header.php';
	$admin=new admin;
	$err=[];
	if (isset($_POST['submit']))
	{
		if(isset($_POST['name'])&& !empty($_POST['name']))
		{
			$admin->name = $_POST['name'];
		}
		else
		{
			
			$err[0] = "Name field cannot be empty";
		}

		if(isset($_POST['username'])&& !empty($_POST['username']))
		{
			$admin->username = $_POST['username'];
		}
		else
		{
			$err[1] ="Username must be entered";
		}
		if(isset($_POST['email'])&& !empty($_POST['email']))
		{
			$admin->email = $_POST['email'];
		}
		else
		{
			$err[2] ="Email must be entered";
		}
		if(isset($_POST['phone'])&& !empty($_POST['phone']))
		{
			$admin->phone = $_POST['phone'];
		}
		else
		{
			$err[2] ="Phone field must be entered";
		}
		
		if(isset($_POST['password'])&& !empty($_POST['password']))
		{
			$password = $_POST['password'];
		}
		else
		{
			$err[3] ="Password cannot be empty";
		}

		if (count($err)==0) 
        {
            $admin->salt = uniqid();
            //$admin->salt = $salt;
            $admin->password = sha1($admin->salt.$password);
            $ask = $admin->insertuser();
            
            if ($ask==1)
            {
                echo "<script>alert('inserted successfully')</script>";
            }
            else
            {
                echo "<script>alert('Failed to insert')</script>";
            }
        }              
		

	}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<style>
	form{
		margin-left: 20px;
	}

	input[type=text],input[type=email],input[type=password]{
		width: 50%;
		border: 2px solid #ccc;
	}
	h2{
		margin-left: 20px;
	}
</style>
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<h2>Add-Admin</h2>
		<form method="post">

		Enter the Admin name:<br>
		<input type="text" name="name" placeholder="Admin name" autofocus="" class="form-control"><br><br>

		Enter the Username:<br>
		<input type="text" name="username" placeholder="User name" class="form-control"><br><br>

		Enter the E-mail:<br>
		<input type="email" name="email"   placeholder="E-mail"  class="form-control"><br><br>

		Enter the Contact No. :<br>
		<input type="text" name="phone" placeholder="Phone no." class="form-control"><br><br>

		Enter the Password:<br>
		<input type="password" name="password" placeholder="Password" class="form-control"><br><br>

		<input type="submit" name="submit" class="btn btn-primary">


	</form>
			
		</div><!-- /.row -->
		
	</div><!--/.main-->

	
</body>

</html>
