<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Arjun Vision</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Arjun</span>Vision</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">

			<li><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>

			<li><a href="addadmin.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Addadmin</a></li>

			<li><a href="viewusers.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Viewusers</a></li>

			<li><a href="addabout.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Add About you</a></li>

			<li><a href="listabout.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>list About</a></li>

			<li><a href="addcontact.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Add Contact</a></li>

			<li><a href="listcontact.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>list Contact</a></li>

			<li><a href="addtestimonial.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Add Testimonial</a></li>

			<li><a href="listtestimonial.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>list Testimonial</a></li>


			<li><a href="addservices.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Add Services</a></li>

			<li><a href="listservices.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>List Services</a></li>

			<li><a href="addskills.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Add Skills</a></li>
			
			<li><a href="listskills.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>List Skills</a></li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>
		<!--<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>-->
	</div><!--/.sidebar-->