<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job List</title>
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="basic_css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Job List</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-md-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
	    <div class="row">
			<div class="col-md-2">
			  	<div class="sidebar content-box" style="display: block;">
	                <ul class="nav">
	                    <!-- Main menu -->
	                    <li><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
	                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
	                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
	                    <li class="current"><a href="tables.html.php"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
	                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
	                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
	                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
	                    <li class="submenu">
	                         <a href="#">
	                            <i class="glyphicon glyphicon-list"></i> Pages
	                            <span class="caret pull-right"></span>
	                         </a>
	                         <!-- Sub menu -->
	                         <ul>
	                            <li><a href="login.html">Login</a></li>
	                            <li><a href="signup.html">Signup</a></li>
	                        </ul>
	                    </li>
	                </ul>
	            </div>
			</div>

			<!-- Bootstrap table -->
			
			<div class="col-md-10">
			  	<div class="row">
					<div class="content-box-large">
			  			<div class="panel-heading">
							<!-- Location filter select -->
							<div class="col-md-5">
					          <div class="row">
					            <div class="col-md-12">
					              <div class="input-group form">
					              	<form method="post" action="select1.php">
					              	  <select name="sort_id">  
								        <option value="job_location">School</option>
								      </select>
								      <select name="sort_selection">
								        <option value=""></option>
					                      <option value="Anna Smith Elementary">Anna Smith Elementary</option>
					                      <option value="Blue Peak High">Blue Peak High</option>
					                      <option value="Clarke N Johnsen Junior High">Clarke N Johnsen Junior High</option>
					                      <option value="Community Learning Center">Community Learning Center</option>
					                      <option value="Copper Canyon Elementary">Copper Canyon Elementary</option>
					                      <option value="Dugway">Dugway</option>
					                      <option value="Early Learning Center">Early Learning Center</option>
					                      <option value="Grantsville Elementary">Grantsville Elementary</option>
					                      <option value="Grantsville High">Grantsville High</option>
					                      <option value="Grantsville Junior High">Grantsville Junior High</option>
					                      <option value="Ibapah Elementary">Ibapah Elementary</option>
					                      <option value="Middle Canyon Elementary">Middle Canyon Elementary</option>
					                      <option value="North Lake Elementary">North Lake Elementary</option>
					                      <option value="Old Mill Elementary">Old Mill Elementary</option>
					                      <option value="Overlake Elementary">Overlake Elementary</option>
					                      <option value="Rose Springs Elementary">Rose Springs Elementary</option>
					                      <option value="Settlement Canyon Elementary">Settlement Canyon Elementary</option>
					                      <option value="Stansbury High">Stansbury High</option>
					                      <option value="Stansbury Park Elementary">Stansbury Park Elementary</option>
					                      <option value="Sterling Elementary">Sterling Elementary</option>
					                      <option value="Tooele High">Tooele High</option>
					                      <option value="Tooele Junior High">Tooele Junior High</option>
					                      <option value="Vernon Elementary">Vernon Elementary</option>
					                      <option value="Wendover High">Wendover High</option>
					                      <option value="West Elementary">West Elementary</option>
					                      <option value="Willow Elementary">Willow Elementary</option>
								      </select>
								      <button type="submit" value="execute">Filter</button>
								    </form>
					              </div>
					            </div>
					          </div>
					       	</div>

		  					<div class="panel-body">
		  						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
									<thead>
										<th>Job ID</th>
									        <th>Job Location</th>
									        <th>Job Details</th>
									        <th>Job Notes</th>
									        <th>Job Date</th>
									      </tr>
									</thead>
									<tbody>
									<?php foreach ($job_id as $index => $job): ?> 
										<tr>
											<td><?php echo $job; ?></td>
									        <td><?php echo $job_location[$index]; ?></td>
									        <td><?php echo $job_description[$index]; ?></td>
									        <td><?php echo $job_notes[$index]; ?></td>
									        <td><?php echo $job_date[$index]; ?></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
				  	</div>
			  	</div>
			</div>
		</div>		
	</div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>