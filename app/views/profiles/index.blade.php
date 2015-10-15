<div class="row">
	{{ Form::btn_create( URL::route('profiles.create'), 'Create profile' ) }}
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
			@foreach ($profiles as $profile)
				<tr>
					<td>{{{ $profile->enabled }}}</td>
					<td>{{{ $profile->name }}}</td>
					<td>{{{ $profile->description }}}</td>

					<td>
						{{ Form::open( ['route'=>['profiles.destroy', $profile->id], 'method' => 'DELETE'] ) }}
							{{ Form::btn_show( URL::route('profiles.show', $profile->id ) ) }}
							{{ Form::btn_edit( URL::route('profiles.edit', $profile->id ) ) }}
							{{ Form::btn_delete( URL::route('profiles.destroy',$profile->id)  ) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>