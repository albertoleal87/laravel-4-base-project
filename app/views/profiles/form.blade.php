<div class="form-group">
	{{ Form::label('enabled', trans('profiles.enabled'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::bootstrap_switch('enabled', $profile->enabled ) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('name', trans('profiles.name'), array('class'=>'col-md-2 control-label required')) }}
	<div class="col-sm-10">
		{{ Form::text('name', $profile->name, array('class'=>'form-control', 'placeholder'=>trans('profiles.name'))) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('description', trans('profiles.description'), array('class'=>'col-md-2 control-label')) }}
	<div class="col-sm-10">
		{{ Form::textarea('description', $profile->description, array('class'=>'form-control', 'placeholder'=>trans('profiles.description'))) }}
	</div>
</div>