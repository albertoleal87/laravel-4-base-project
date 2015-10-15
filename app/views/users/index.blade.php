<div class="row">
	{{ Form::btn_create( URL::route('users.create'), trans('users.create_user') ) }}
</div>
<br>	
<div class="row table-responsive">
	<table class="data-table">
		<thead>
			<tr>
				<th class="col-md-1">{{ trans('users.enabled') }}</th>
				<th class="col-md-1">{{ trans('users.id') }}</th>						
				<th>{{ trans('users.profile_id') }}</th>
				<th>{{ trans('users.name') }}</th>
				<th>{{ trans('users.last_name') }}</th>
				<th>{{ trans('users.mother_last_name') }}</th>
				<th>{{ trans('users.email') }}</th>
				<th>{{ trans('users.options') }}</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>
						@if($user->enabled == 1)
							{{ Form::btn_active() }}
						@else
							{{ Form::btn_inactive() }}
						@endif
					</td>
					<td>{{{ $user->id }}}</td>
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