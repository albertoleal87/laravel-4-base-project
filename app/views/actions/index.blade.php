<div class="row">
	{{ Form::btn_create( URL::route('actions.create'), 'Create action' ) }}
</div>
<br>	
<div class="row table-responsive">
	<table class="table data-table">
		<thead>
			<tr>
				<th>Enabled</th>
				<th>Name</th>
				<th>Description</th>
				<th>Options</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($actions as $action)
				<tr>
					<td>{{{ $action->enabled }}}</td>
					<td>{{{ $action->name }}}</td>
					<td>{{{ $action->description }}}</td>

					<td>
						{{ Form::open( ['route'=>['actions.destroy', $action->id], 'method' => 'DELETE'] ) }}
							{{ Form::btn_show( URL::route('actions.show', $action->id ) ) }}
							{{ Form::btn_edit( URL::route('actions.edit', $action->id ) ) }}
							{{ Form::btn_delete( URL::route('actions.destroy',$action->id)  ) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>