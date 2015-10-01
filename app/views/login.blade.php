<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My App</title>

		{{ HTML::style('public/css/bootstrap.min.css') }}
		{{ HTML::style('public/css/styles.css') }}

	</head>
	<body>

        {{ Form::open( ['url'=>'login', 'method'=>'POST', 'class'=>'form-horizontal'] ) }}
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Log in</h4>
						</div>
						<div class="modal-body">

							<div class="form-group">
								{{ Form::label('', '', array('class' => 'col-sm-2 control-label')); }}
								<div class="col-sm-10">
									<p class="help-block">Please log in to the app.</p>
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('email', 'Email:', array('class' => 'col-sm-2 control-label')); }}
								<div class="col-sm-10">
									{{ Form::email('email', '', array('class' => 'form-control', 'placeholder'=>'Email')); }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('password', 'Password:', array('class' => 'col-sm-2 control-label')); }}
								<div class="col-sm-10">
									{{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Password')); }}
								</div>
							</div>

							<div class="text-center">
								@include('alerts')
							</div>

						</div>
						<div class="modal-footer">
							{{ Form::submit('Log in', array('class' => 'btn btn-primary center-block')); }}
						</div>
					</div>
				</div>
			</div>
        {{ Form::close() }}

		{{ HTML::script('public/js/jquery.min.js') }}
		{{ HTML::script('public/js/bootstrap.min.js') }}

		<script type="text/javascript">
			$(document).ready(function(){
				$('#myModal').modal('show');
			})
		</script>

	</body>
</html>
