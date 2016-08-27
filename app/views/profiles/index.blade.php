<div class="row">
	{{ Form::btn_create( URL::route('profiles.create'), trans('profiles.create') ) }}
</div>
<br>	
<div class="row table-responsive">
	<table class="table data-table">
		<thead>
			<tr>
				<th class="col-md-1">{{ trans('profiles.enabled') }}</th>
				<th class="col-md-1">{{ trans('profiles.id') }}</th>
				<th>{{ trans('profiles.name') }}</th>
				<th>{{ trans('profiles.description') }}</th>
				<th>{{ trans('forms.options') }}</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($profiles as $profile)
				<tr>
					<td>
						@if($profile->enabled == 1)
							{{ Form::btn_active() }}
						@else
							{{ Form::btn_inactive() }}
						@endif
					</td>
					<td>{{{ $profile->id }}}</td>
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