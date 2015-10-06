<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My app</title>

		{{ HTML::style('public/css/bootstrap.min.css') }}
		{{ HTML::style('public/css/styles.css') }}

		{{ HTML::script('public/js/jquery.min.js') }}
		{{ HTML::script('public/js/bootstrap.min.js') }}
		{{ HTML::script('public/js/scripts.js') }}
		
	</head>

	<body>

		<div id="wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ URL::to('/') }}">SB Admin v2.0</a>
				</div>
				<!-- /.navbar-header -->

				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-envelope"></i>  <i class="caret"></i>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<a>
									<div>
										<strong>John Smith</strong>
										<span class="pull-right text-muted">
											<em>Yesterday</em>
										</span>
									</div>
									<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<strong>John Smith</strong>
										<span class="pull-right text-muted">
											<em>Yesterday</em>
										</span>
									</div>
									<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<strong>John Smith</strong>
										<span class="pull-right text-muted">
											<em>Yesterday</em>
										</span>
									</div>
									<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center">
									<strong>Read All Messages</strong>
									<i class="glyphicon glyphicon-menu-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-tasks"></i>  <i class="caret"></i>
						</a>
						<ul class="dropdown-menu dropdown-tasks">
							<li>
								<a>
									<div>
										<p>
											<strong>Task 1</strong>
											<span class="pull-right text-muted">40% Complete</span>
										</p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												<span class="sr-only">40% Complete (success)</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<p>
											<strong>Task 2</strong>
											<span class="pull-right text-muted">20% Complete</span>
										</p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
												<span class="sr-only">20% Complete</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<p>
											<strong>Task 3</strong>
											<span class="pull-right text-muted">60% Complete</span>
										</p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
												<span class="sr-only">60% Complete (warning)</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<p>
											<strong>Task 4</strong>
											<span class="pull-right text-muted">80% Complete</span>
										</p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
												<span class="sr-only">80% Complete (danger)</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center">
									<strong>See All Tasks</strong>
									<i class="glyphicon glyphicon-menu-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-bell"></i>  <i class="caret"></i>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a>
									<div>
										<i class="glyphicon glyphicon-comment"></i> New Comment
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<i class="glyphicon glyphicon-envelope"></i> Message Sent
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<i class="glyphicon glyphicon-tasks"></i> New Task
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a>
									<div>
										<i class="glyphicon glyphicon-open"></i> Server Rebooted
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center">
									<strong>See All Alerts</strong>
									<i class="glyphicon glyphicon-menu-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-alerts -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user"></i>  <i class="caret"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a><i class="glyphicon glyphicon-user"></i> User Profile</a>
							</li>
							<li><a><i class="glyphicon glyphicon-cog"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{ URL::to('logout') }}"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->

				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							<li class="sidebar-search">
								<div class="input-group custom-search-form">
									<input type="text" class="form-control" placeholder="Search...">
									<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</span>
								</div>
								<!-- /input-group -->
							</li>
							<li>
								<a href="{{ URL::to('/') }}" class="active"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
							</li>
							<li>
								<a class="toggle-menu"><i class="glyphicon glyphicon-stats"></i> Charts<span class="glyphicon glyphicon-menu-down pull-right"></span></a>
								<ul class="nav nav-second-level toggle-item" style="display:none">
									<li>
										<a href="flot.html">Flot Charts</a>
									</li>
									<li>
										<a href="morris.html">Morris.js Charts</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="tables.html"><i class="glyphicon glyphicon-th"></i> Tables</a>
							</li>
							<li>
								<a href="forms.html"><i class="glyphicon glyphicon-edit"></i> Forms</a>
							</li>
							<li>
								<a class="toggle-menu"><i class="glyphicon glyphicon-wrench"></i> UI Elements<span class="glyphicon glyphicon-menu-down pull-right"></span></a>
								<ul class="nav nav-second-level toggle-item" style="display:none">
									<li>
										<a href="panels-wells.html">Panels and Wells</a>
									</li>
									<li>
										<a href="buttons.html">Buttons</a>
									</li>
									<li>
										<a href="notifications.html">Notifications</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
									<li>
										<a href="icons.html"> Icons</a>
									</li>
									<li>
										<a href="grid.html">Grid</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a class="toggle-menu"><i class="glyphicon glyphicon-list"></i> Multi-Level Dropdown<span class="glyphicon glyphicon-menu-down pull-right"></span></a>
								<ul class="nav nav-second-level toggle-item" style="display:none">
									<li>
										<a>Second Level Item</a>
									</li>
									<li>
										<a>Second Level Item</a>
									</li>
									<li>
										<a class="toggle-menu">Third Level <span class="glyphicon glyphicon-menu-down pull-right"></span></a>
										<ul class="nav nav-third-level toggle-item" style="display:none">
											<li>
												<a>Third Level Item</a>
											</li>
											<li>
												<a>Third Level Item</a>
											</li>
											<li>
												<a>Third Level Item</a>
											</li>
											<li>
												<a>Third Level Item</a>
											</li>
										</ul>
										<!-- /.nav-third-level -->
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a class="toggle-menu"><i class="glyphicon glyphicon-duplicate"></i> Sample Pages<span class="glyphicon glyphicon-menu-down pull-right"></span></a>
								<ul class="nav nav-second-level toggle-item" style="display:none">
									<li>
										<a href="blank.html">Blank Page</a>
									</li>
									<li>
										<a href="login.html">Login Page</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Dashboard</h1>
					</div>
				</div>
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->
	</body>
</html>
