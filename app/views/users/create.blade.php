{{ Form::open( ['route' => 'users.store', 'class' => 'form-horizontal'] ) }}

	@include('users.form')

	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-sm-10">
			{{ Form::btn_save() }}
			{{ Form::btn_cancel(URL::route('users.index')) }}
		</div>
	</div>

{{ Form::close() }}