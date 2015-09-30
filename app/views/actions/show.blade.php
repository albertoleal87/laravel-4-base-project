@extends('layouts.scaffold')

@section('main')

<h1>Show Action</h1>

<p>{{ link_to_route('actions.index', 'Return to All actions', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Enable</th>
				<th>Name</th>
				<th>Description</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $action->enable }}}</td>
					<td>{{{ $action->name }}}</td>
					<td>{{{ $action->description }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('actions.destroy', $action->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('actions.edit', 'Edit', array($action->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
