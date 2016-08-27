{{ Form::open( ['route' => ['profiles.update', $profile->id], 'class' => 'form-horizontal', 'method' => 'PUT'] ) }}

	@include('profiles.form')

	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-sm-10">
			{{ Form::btn_save() }}
			{{ Form::btn_cancel(URL::route('profiles.index')) }}
		</div>
	</div>

{{ Form::close() }}