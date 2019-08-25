<?php
    require_once 'class/common.class.php';
    require_once 'class/contact.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
?>		
<script src="js/bootstrap-table.js"></script>
<style>
	th,td,tr{
		padding: 3px;
		border: 1px solid black;
	}
</style>
<link href="css/bootstrap-table.css" rel="stylesheet">


	 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">CONTACT</h1>
			</div>
		</div><!--/.row-->		
<!--/.row-->	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Basic Table</div> -->
					<div class="panel-body"> 
						<table data-toggle="table" border="2">
						    <thead>
						    <tr>
						        <th>ID</th>
						        <th>Phone</th>
						        <th>E-mail</th>
						        <th>Address</th>
						        <th>Created_by</th>
						        <th>Created_at</th>
						        <th>Modified_by</th>
						        <th>Modified_at</th>
						     	<th>Edit</th>

						    </tr>
						    </thead>
						    <tbody>
						    	<?php
						    		$contact =new contact;
									$data = $contact->selectcontact(); 
									foreach ($data as  $value) { ?> 
									<tr><td> <?php echo $value->id ; ?> </td>
									<td> <?php echo $value->phone ; ?> </td>
									<td> <?php echo $value->email ; ?> </td>
									<td> <?php echo $value->address ; ?> </td>

									<td> <?php echo $value->created_by ; ?> </td>
									<td> <?php echo $value->created_at ; ?> </td>
									<td> <?php echo $value->modified_by ; ?> </td>
									<td> <?php echo $value->modified_at ; ?> </td>
									
									<td> <?php 
													{
														echo "<a  class='btn btn-primary' href='updatecontact.php?id=".$value->id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-danger' href='deletecontact.php?id=".$value->id."'>Delete</a>";
													}
											?>

									<?php } ?> 
									</tbody>
						   
						  <!--   </thead> -->
						</table>
					</div>
				</div>
			</div>

		</div>	
		
		
	</div>