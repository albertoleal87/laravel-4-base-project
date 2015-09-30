@extends('layouts.scaffold')

@section('main')

<h1>All Actions</h1>

<p>{{ link_to_route('actions.create', 'Add New Action', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($actions->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Enable</th>
				<th>Name</th>
				<th>Description</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($actions as $action)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no actions
@endif

@stop
