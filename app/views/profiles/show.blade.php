{{ Form::open( ['class' => 'form-horizontal'] ) }}

	@include('profiles.form')

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