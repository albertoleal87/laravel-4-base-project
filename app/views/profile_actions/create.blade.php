{{ Form::model($profile_action, ['route' => 'profile_actions.store', 'class' => 'form-horizontal'] ) }}

	        <div class="form-group">
            {{ Form::label('enabled', 'Enabled:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::checkbox('enabled') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('profile_id', 'Profile_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'profile_id', null, array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('action_id', 'Action_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'action_id', null, array('class'=>'form-control')) }}
            </div>
        </div>


	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-sm-10">
			{{ Form::btn_save() }}
			{{ Form::btn_cancel(URL::route('profile_actions.index')) }}
		</div>
	</div>

{{ Form::close() }}