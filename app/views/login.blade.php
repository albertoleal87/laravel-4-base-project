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
	
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Please Sign In</h3>
						</div>
						<div class="panel-body">
							{{ Form::open( ['url'=>'login', 'method'=>'POST', 'class'=>'form-horizontal'] ) }}
								<fieldset>

									<div class="form-group">
										{{ Form::label('email', 'Email:', array('class' => 'col-sm-3 control-label')); }}
										<div class="col-sm-9">
											{{ Form::email('email', '', array('class' => 'form-control', 'placeholder'=>'E-mail', 'autofocus'=>"", 'autocomplete'=>'off')); }}
										</div>
									</div>

									<div class="form-group">
										{{ Form::label('password', 'Password:', array('class' => 'col-sm-3 control-label')); }}
										<div class="col-sm-9">
											{{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Password', 'value'=>"")); }}
										</div>
									</div>
									<div class="form-group">
										{{ Form::label('lang', 'Lang:', array('class' => 'col-sm-3 control-label')); }}
										<div class="col-sm-9">
											{{ Form::select('lang', array('en'=>'English', 'es' => 'Spanish'), false, array('class' => 'form-control' ) ); }}
										</div>
									</div>
									{{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')); }}
									
									<br>
									
									@include('alerts')

								</fieldset>
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
