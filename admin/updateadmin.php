<?php
	require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    
    
    $admin = new admin;
     		
    	$admin->id = $_GET['id'];

    		if($admin->id != $_SESSION['dbid'])
    		{
    			header('view.php');
    		}


    	
				if(isset($_POST['addadmin']))
    			{
			    	
			    	$admin->name = $_POST['name'];
			    	$admin->username =$_POST['username'] ;
			    	$admin->email = $_POST['email'];
			    	$admin->phone=$_POST['phone'];
			    	if (isset($_POST['password'])&& !empty($_POST['password']))
			    	{
			    		$password = $_POST['password'];
			    		$salt = uniqid();
			    		$admin->salt = $salt;
			    		$admin->password = sha1($admin->salt.$password);
			    		$ask = $admin->updateadminwithpassword();
			    	}
			    	else
			    	{
			    		
			    		$ask = $admin->updateadmin();
			    	}
			    	if($ask==="Duplicate")
			    	{
			    		echo "<script>alert('Duplicate Entry')</script>";
			    	}
			    	else if($ask)
			    	{
			    		echo "<script>alert('Updated Sucessfully')</script>";
			    	}
			    	else
			    	{
			    		echo "<script>alert('Update Unsucessfully')</script>";
			    	}
    }
    $data = $admin->selectadminbyid();
    foreach ($data as $value) {
?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-4">
				<form role="form" method="post" >
							
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" placeholder="" value="<?php echo $value->name ?>">
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" placeholder="" value="<?php echo $value->username ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="" value="<?php echo $value->email ?>">
								</div>
																
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" name="phone" class="form-control" value="<?php echo $value->phone ?>">
								</div>

								<button type="submit" class="btn btn-primary" name="addadmin" value="submit">Submit</button>
				</form><?php  } ?>
			</div>
			<div class="col-sm-5"></div>
		</div>
	</div>

