<div class="row">
	<h1 class="text-center custom-title">{{ Lang::get('modules/users.title') }}</h1>
</div>

<div class="row">
	<a href="{{ URL::route('users.create') }}" class="btn btn-success">
		<i class="glyphicon glyphicon-plus"></i> {{ Lang::get('modules/users.new_user') }}
	</a>
</div>
<br>	
<div class="row">
	@if ($users->count())
		<div class="table-responsive">
			<table class="table table-striped table-hover data-table table-condensed">
				<thead>
					<tr>
						<th>{{ Lang::get('modules/users.field_enable') }}</th>
						<th>{{ Lang::get('modules/users.field_profile_id') }}</th>
						<th>{{ Lang::get('modules/users.field_name') }}</th>
						<th>{{ Lang::get('modules/users.field_last_name') }}</th>
						<th>{{ Lang::get('modules/users.field_mother_last_name') }}</th>
						<th>{{ Lang::get('modules/users.field_email') }}</th>
						<th>{{ Lang::get('modules/users.field_options') }}</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)
						<tr>
							<td>{{{ $user->enable }}}</td>
							<td>{{{ $user->profile->name }}}</td>
							<td>{{{ $user->name }}}</td>
							<td>{{{ $user->last_name }}}</td>
							<td>{{{ $user->mother_last_name }}}</td>
							<td>{{{ $user->email }}}</td>
							<td>
								{{ Form::open( ['route'=>['users.destroy', $user->id], 'method' => 'DELETE'] ) }}
									{{ link_to_route('users.show', '', ['id'=>$user->id], ['class'=>'btn btn-xs btn-warning glyphicon glyphicon-search', 'title' => Lang::get('modules/users.show_user')] ) }}
									{{ link_to_route('users.edit', '', ['id'=>$user->id], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil', 'title' => Lang::get('modules/users.edit_user') ] ) }}
									<a title="{{ Lang::get('modules/users.delete_user')}}"><i class="btn btn-xs btn-danger glyphicon glyphicon-trash confirm-delete"></i></a>
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@else
		{{ Lang::get('modules/users.there_are_no_users') }}	
	@endif
</div>