<?php
    require_once 'class/common.class.php';
    require_once 'class/category.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
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
				<h1 class="page-header">CATEGORY LIST</h1>
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
						        <th>Created_by</th>
						        <th>Created_at</th>
						        <!-- <th data-field="password">Password</th> -->
						        <th>Modified_by</th>
						        <th>MOdified_at</th>
						        <th>Status</th>
						        <th>Edit</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    		$category=new category;
									$data = $category->listcategory(); 
									foreach ($data as  $value) { ?> 
									<tr><td> <?php echo $value->id ; ?> </td>
									<td> <?php echo $value->category_name ; ?> </td>
									<td> <?php echo $value->created_by ; ?> </td>
									<td> <?php echo $value->created_at ; ?> </td>
									<td> <?php echo $value->modified_by ; ?> </td>
									<td> <?php echo $value->modified_at ; ?> </td>
									<td> <?php if($value->status == 1)
													{
														echo "<a  class='btn btn-success' href='#'>Active</a>";
													}
													else
													{
														echo "<a class='btn btn-default' href='#'>Inactive</a>";
													} ?>
													</td>
									<td> <?php 
													{
														echo "<a  class='btn btn-primary' href='updatecategory.php?id=".$value->id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-danger' href='deletecategory.php?id=".$value->id."'>Delete</a>";
													}
													// else
													// {
													// 	echo "<a  class='btn btn-default' href='updatecategory.php'>Update</a>"."&nbsp" ; 
													// 	echo "<a class='btn btn-default' href='deletecategory.php'>Delete</a>";
													// }
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