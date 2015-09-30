@extends('layouts.scaffold')

@section('main')

<h1>Show Setting</h1>

<p>{{ link_to_route('settings.index', 'Return to All settings', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Key</th>
				<th>Value</th>
				<th>Description</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $setting->key }}}</td>
					<td>{{{ $setting->value }}}</td>
					<td>{{{ $setting->description }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('settings.destroy', $setting->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('settings.edit', 'Edit', array($setting->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
