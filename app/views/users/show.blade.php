<div class="row col-sm-12">

	{{ Form::open(array('class' => 'form-horizontal')) }}

		@include('users.form')

		<div class="form-group">
			<label class="col-sm-2 control-label">&nbsp;</label>
			<div class="col-sm-10">
				{{ Form::btn_return(URL::previous()) }}
			</div>
		</div>

	{{ Form::close() }}

</div>
<script type="text/javascript">
	disable_inputs();
	$('[placeholder]').removeAttr('placeholder');
</script>