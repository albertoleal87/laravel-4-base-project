<div class="form-group">
	{{ Form::label('enabled', trans('users.enabled'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::bootstrap_switch('enabled', $user->enabled) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('profile_id', trans('users.profile_id'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::select('profile_id', $profiles, $user->profile_id, ['class'=>'form-control'] ) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('name', trans('users.name'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('name', $user->name, array('class'=>'form-control', 'placeholder'=>trans('users.name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('last_name', trans('users.last_name'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('last_name', $user->last_name, array('class'=>'form-control', 'placeholder'=>trans('users.last_name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('mother_last_name', trans('users.mother_last_name'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('mother_last_name', $user->mother_last_name, array('class'=>'form-control', 'placeholder'=>trans('users.mother_last_name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('email', trans('users.email'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::text('email', $user->email, array('class'=>'form-control', 'placeholder'=>trans('users.email'))) }}
	</div>
</div>

@if(Route::currentRouteName() == 'users.create')
	<div class="form-group">
		{{ Form::label('password', trans('users.password'), array('class'=>'col-md-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('password', $user->password, array('class'=>'form-control', 'placeholder'=>trans('users.password'))) }}
		</div>
	</div>
@endif