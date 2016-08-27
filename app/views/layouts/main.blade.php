<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ Config::get('app.name') }}</title>

		{{ HTML::style('public/css/bootstrap.min.css') }}
		{{ HTML::style('public/css/dataTables.bootstrap.min.css') }}
		{{ HTML::style('public/css/bootstrap-switch.min.css') }}
		{{ HTML::style('public/css/styles.css') }}

		{{ HTML::script('public/js/jquery.min.js') }}
		{{ HTML::script('public/js/bootstrap.min.js') }}
		{{ HTML::script('public/js/jquery.dataTables.min.js') }}
		{{ HTML::script('public/js/dataTables.bootstrap.min.js') }}
		{{ HTML::script('public/js/bootstrap-switch.min.js') }}
		{{ HTML::script('public/js/bootbox.min.js') }}

		<?php include('public/js/scripts.php') ?>
				
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
					{{ link_to('/', Config::get('app.name'), ['class'=>'navbar-brand']) }}
				</div>
				<!-- /.navbar-header -->

				<ul class="nav navbar-top-links navbar-right">
					<li class="toggle-top-menu">
						<a>
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
					<li class="toggle-top-menu">
						<a>
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
					<li class="toggle-top-menu">
						<a>
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
					<li class="toggle-top-menu">
						<a>
							<i class="glyphicon glyphicon-user"></i>  <i class="caret"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a><i class="glyphicon glyphicon-user"></i> {{ trans('menu.user_profile') }}</a>
							</li>
							<li><a href="{{ URL::to('settings') }}"><i class="glyphicon glyphicon-cog"></i> {{ trans('menu.settings') }}</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{ URL::to('logout') }}"><i class="glyphicon glyphicon-log-out"></i> {{ trans('menu.logout') }}</a>
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
							{{ Form::side_menu_item(URL::to('/'),Request::segment(1) == '' ? 'active':'',"glyphicon glyphicon-dashboard",trans('menu.dashboard')); }}
							{{ Form::side_menu_item(URL::to('users'),Request::segment(1) == 'users' ? 'active':'',"glyphicon glyphicon-user",trans('menu.users')); }}
							<li>
								<a class="toggle-left-menu"><i class="glyphicon glyphicon-list"></i> {{ trans('menu.profiles_actions_main') }} <span class="glyphicon glyphicon-menu-down pull-right"></span></a>
								<ul class="nav nav-second-level toggle-item" style="display:none">
									{{ Form::side_menu_item(URL::to('profiles'),Request::segment(1) == 'profiles' ? 'active':'',"",trans('menu.profiles')); }}
									{{ Form::side_menu_item(URL::to('actions'),Request::segment(1) == 'actions' ? 'active':'',"",trans('menu.actions')); }}
									{{ Form::side_menu_item(URL::to('profile_actions'),Request::segment(1) == 'profile_actions' ? 'active':'',"",trans('menu.profile_actions_sub')); }}
								</ul>
							</li>
							{{ Form::side_menu_item(URL::to('settings'),Request::segment(1) == 'settings' ? 'active':'',"glyphicon glyphicon-cog",trans('menu.settings')); }}
							{{ Form::side_menu_item(URL::to('logout'),'',"glyphicon glyphicon-log-out",trans('menu.logout')); }}
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>

			<div id="page-wrapper">
				<div class="row">
					<h1 class="page-header text-center custom-title text-uppercase">{{ isset($title) ? $title : '' }}</h1>
				</div>

				@include('alerts')

				{{ isset($content) ? $content : '' }}
		
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->
	</body>
</html>
