{{ Form::model($setting, ['class' => 'form-horizontal'] ) }}

	        <div class="form-group">
            {{ Form::label('key', 'Key:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('key', null, array('class'=>'form-control', 'placeholder'=>'Key')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('value', 'Value:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('value', null, array('class'=>'form-control', 'placeholder'=>'Value')) }}
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