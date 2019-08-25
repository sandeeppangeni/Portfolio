<?php
require_once 'class/common.class.php';
require_once 'class/admin.class.php';
require_once 'class/session.class.php';
$admin=new admin;
$err=[];
if (isset($_POST['submit'])) {
	if (isset($_POST['username'])&& !empty($_POST['username'])) {
		$admin->username=$_POST['username'];
	}else{
		$err[0]='Username Cannot Be Empty';
	}
	if (isset($_POST['password'])&& !empty($_POST['password'])) {
		$admin->password=$_POST['password'];
	}
	else{
		$err[1]='Password Cannot Be Empty';
	}

	if (count($err)==0) {
		$res=$admin->selectadminbyusername();
		if (!count($res)) {
			$err[3]= "Username/Password Doesnot Match";
		}else{
			$salt=$res[0]->salt;
			$dpassword=$res[0]->password;
			$newpassword=sha1($salt.$admin->password);
			if ($newpassword==$dpassword) 
			{
				#$err[3]= "Username/Password Match";
				sessionhelper::set('admin',$admin->username);
				sessionhelper::set('dbid',$res[0]->id);
				$date=date('Y-m-d H:i:s');
				$admin->last_login = $date;
				$admin->updatelastlogin();
				header('location:dashboard.php');
			}
			else
			{
				$err[3]="Username/Password Doesnot Match";
			}
		}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="text-align: center;">Log in</div>
				<div class="panel-body" style="text-align: center;">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
						<?php
						foreach ($err as $error) {
							echo $error."<br/>";
						}
						?>
							<input type="submit" name="submit" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
