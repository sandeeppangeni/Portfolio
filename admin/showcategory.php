<?php
    require_once 'class/common.class.php';
    require_once 'class/category.class.php';
    require_once 'class/session.class.php';
     require_once 'class/admin.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
?>		
<script src="js/bootstrap-table.js"></script>

<link href="css/bootstrap-table.css" rel="stylesheet">


	 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row -->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Verified Users</h1>
			</div>
		</div><!--/.row-->
				
		
<!--/.row-->	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Basic Table</div> -->
					<div class="panel-body"> 
						<table data-toggle="table">
						    <thead>
						    <tr>
						        <th>ID</th>
						        <th>Name</th>
						        <th>Username</th>
						        <th>Email</th>
						        <!-- <th data-field="password">Password</th> -->
						        <th>Created_at</th>
						        <th>Last_Login</th>
						        <th>Edit</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    		$admin = new admin;
									$data = $admin->selectuser(); 
									foreach ($data as  $value) { ?> 
									<tr><td> <?php echo $value->id ; ?> </td>
									<td> <?php echo $value->name ; ?> </td>
									<td> <?php echo $value->username ; ?> </td>
									<td> <?php echo $value->email ; ?> </td>
									<td> <?php echo $value->phone ; ?> </td>
									<td> <?php echo $value->last_login; ?> </td>

									<td> <?php if($value->username ==$_SESSION['admin'])
													{
														echo "<a  class='btn btn-primary' href='updateadmin.php?id=".$value->id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-danger' href='deleteadmin.php?id=".$value->id."'>Delete</a>";
													}
													else
													{
														echo "<a class='btn btn-danger' href='deleteadmin.php?id=".$value->id."'>Delete</a>";
													}
											?>
										  </td>
									<!-- <td> <?php echo $value->password ; ?> </td>
									<td> -->  </tr>
									<?php } ?> 
									</tbody>
						   
						  <!--   </thead> -->
						</table>
					</div>
				</div>
			</div>

		</div>	
		
		
	</div>