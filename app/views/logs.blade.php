@if(isset($content))
<div class="row">
{{ Form::btn_return( URL::to('logs')) }}
</div>
<div class="row">
	{{ $content }}
</div>
@else
<div class="row table-responsive">
	<table class="data-table">
		<thead>
			<tr>
				<th class="col-md-10">Log</th>
				<th class="col-md-2">{{ trans('forms.show') }}</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($files as $file)
				<tr>
					<td>
						{{ $file }}
					</td>
					<td>
						{{ Form::btn_show( URL::to("logs/{$file}") ) }}
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endif
