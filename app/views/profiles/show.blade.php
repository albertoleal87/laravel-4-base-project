{{ Form::model($profile, ['class' => 'form-horizontal'] ) }}

	        <div class="form-group">
            {{ Form::label('enabled', 'Enabled:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::checkbox('enabled') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('name', 'Name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', null, array('class'=>'form-control', 'placeholder'=>'Description')) }}
            </div>
        </div>


	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-sm-10">
			{{ Form::btn_return(URL::previous()) }}
		</div>
	</div>

{{ Form::close() }}
<script type="text/javascript">
	disable_inputs();
	$('[placeholder]').removeAttr('placeholder');
</script>