<div class="form-group">
	{{ Form::label('enabled', trans('users.field_enabled'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::select('enabled',[ 0 => 'Inactivo' , 1 => 'Activo' ], $user->enabled, ['class'=>'form-control']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('profile_id', trans('users.field_profile_id'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::select('profile_id', $profiles, $user->profile_id, ['class'=>'form-control'] ) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('name', trans('users.field_name'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('name', $user->name, array('class'=>'form-control', 'placeholder'=>trans('users.field_name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('last_name', trans('users.field_last_name'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('last_name', $user->last_name, array('class'=>'form-control', 'placeholder'=>trans('users.field_last_name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('mother_last_name', trans('users.field_mother_last_name'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('mother_last_name', $user->mother_last_name, array('class'=>'form-control', 'placeholder'=>trans('users.field_mother_last_name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('email', trans('users.field_email'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('email', $user->email, array('class'=>'form-control', 'placeholder'=>trans('users.field_email'))) }}
	</div>
</div>

@if(Route::currentRouteName() == 'usuarios.create')
	<div class="form-group">
		{{ Form::label('password', trans('users.field_password'), array('class'=>'col-md-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('password', $user->password, array('class'=>'form-control', 'placeholder'=>trans('users.field_password'))) }}
		</div>
	</div>
@endif