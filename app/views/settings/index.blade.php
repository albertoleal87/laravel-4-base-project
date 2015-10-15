<div class="row">
	{{ Form::btn_create( URL::route('settings.create'), 'Create setting' ) }}
</div>
<br>	
<div class="row table-responsive">
	<table class="table data-table">
		<thead>
			<tr>
				<th>Key</th>
				<th>Value</th>
				<th>Description</th>
				<th>Options</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($settings as $setting)
				<tr>
					<td>{{{ $setting->key }}}</td>
					<td>{{{ $setting->value }}}</td>
					<td>{{{ $setting->description }}}</td>

					<td>
						{{ Form::open( ['route'=>['settings.destroy', $setting->id], 'method' => 'DELETE'] ) }}
							{{ Form::btn_show( URL::route('settings.show', $setting->id ) ) }}
							{{ Form::btn_edit( URL::route('settings.edit', $setting->id ) ) }}
							{{ Form::btn_delete( URL::route('settings.destroy',$setting->id)  ) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>