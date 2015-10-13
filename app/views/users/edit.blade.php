<div class="row col-sm-12">

	{{ Form::open(array('route' => array('users.update', $user->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

		@include('users.form')

		<div class="form-group">
			<label class="col-sm-2 control-label">&nbsp;</label>
			<div class="col-sm-10">
				{{ Form::btn_save() }}
				{{ Form::btn_cancel(URL::route('users.index')) }}
			</div>
		</div>

	{{ Form::close() }}

</div>
