<div class="row">
	{{ Form::btn_create( URL::route('users.create'), trans('modules/users.create_user') ) }}
</div>
<br>	
<div class="row">
	@if ($users->count())
		<div class="table-responsive">
			<table class="table table-striped table-hover data-table">
				<thead>
					<tr>
						<th class="col-md-1">{{ trans('modules/users.field_enabled') }}</th>
						<th>{{ trans('modules/users.field_profile_id') }}</th>
						<th>{{ trans('modules/users.field_name') }}</th>
						<th>{{ trans('modules/users.field_last_name') }}</th>
						<th>{{ trans('modules/users.field_mother_last_name') }}</th>
						<th>{{ trans('modules/users.field_email') }}</th>
						<th>{{ trans('modules/users.field_options') }}</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)
						<tr>
							<td>
								@if($user->enabled == 1)
									<button class="btn btn-xs btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Activo</button>
								@else
									<button class="btn btn-xs btn-danger btn-block"><i class="glyphicon glyphicon-remove"></i> Inactivo</button>								
								@endif
							</td>
							<td>{{{ $user->profile->name }}}</td>
							<td>{{{ $user->name }}}</td>
							<td>{{{ $user->last_name }}}</td>
							<td>{{{ $user->mother_last_name }}}</td>
							<td>{{{ $user->email }}}</td>
							<td>
								{{ Form::open( ['route'=>['users.destroy', $user->id], 'method' => 'DELETE'] ) }}
									{{ Form::btn_show( URL::route('users.show', $user->id ) ) }}
									{{ Form::btn_edit( URL::route('users.edit', $user->id ) ) }}
									{{ Form::btn_delete( URL::route('users.destroy',$user->id)  ) }}
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@else
		{{ trans('modules/users.there_are_no_users') }}	
	@endif
</div>