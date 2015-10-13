<div class="row col-sm-12">

	{{ Form::open(array('route' => 'users.store', 'class' => 'form-horizontal')) }}

		<div class="form-group">
			{{ Form::label('enabled', trans('modules/users.field_enabled'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('enabled',[ 0 => 'Inactivo' , 1 => 'Activo' ], $user->enabled, ['class'=>'form-control']) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('profile_id', trans('modules/users.field_profile_id'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('profile_id', $profiles, $user->profile_id, ['class'=>'form-control'] ) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('name', trans('modules/users.field_name'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('name', $user->name, array('class'=>'form-control', 'placeholder'=>trans('modules/users.field_name'))) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('last_name', trans('modules/users.field_last_name'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('last_name', $user->last_name, array('class'=>'form-control', 'placeholder'=>trans('modules/users.field_last_name'))) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('mother_last_name', trans('modules/users.field_mother_last_name'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('mother_last_name', $user->mother_last_name, array('class'=>'form-control', 'placeholder'=>trans('modules/users.field_mother_last_name'))) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('email', trans('modules/users.field_email'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('email', $user->email, array('class'=>'form-control', 'placeholder'=>trans('modules/users.field_email'))) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('password', trans('modules/users.field_password'), array('class'=>'col-md-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('password', $user->password, array('class'=>'form-control', 'placeholder'=>trans('modules/users.field_password'))) }}
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">&nbsp;</label>
			<div class="col-sm-10">
				{{ Form::btn_save() }}
				{{ Form::btn_cancel(URL::route('users.index')) }}
			</div>
		</div>

	{{ Form::close() }}

</div>
