<div class="row">
	{{ Form::btn_create( URL::route('profile_actions.create'), 'Create profile_action' ) }}
</div>
<br>	
<div class="row table-responsive">
	<table class="table data-table">
		<thead>
			<tr>
				<th>Enabled</th>
				<th>Profile_id</th>
				<th>Action_id</th>
				<th>Options</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($profile_actions as $profile_action)
				<tr>
					<td>{{{ $profile_action->enabled }}}</td>
					<td>{{{ $profile_action->profile_id }}}</td>
					<td>{{{ $profile_action->action_id }}}</td>

					<td>
						{{ Form::open( ['route'=>['profile_actions.destroy', $profile_action->id], 'method' => 'DELETE'] ) }}
							{{ Form::btn_show( URL::route('profile_actions.show', $profile_action->id ) ) }}
							{{ Form::btn_edit( URL::route('profile_actions.edit', $profile_action->id ) ) }}
							{{ Form::btn_delete( URL::route('profile_actions.destroy',$profile_action->id)  ) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>