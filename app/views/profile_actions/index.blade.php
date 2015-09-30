@extends('layouts.scaffold')

@section('main')

<h1>All Profile_actions</h1>

<p>{{ link_to_route('profile_actions.create', 'Add New Profile_action', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($profile_actions->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Enable</th>
				<th>Profile_id</th>
				<th>Action_id</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($profile_actions as $profile_action)
				<tr>
					<td>{{{ $profile_action->enable }}}</td>
					<td>{{{ $profile_action->profile_id }}}</td>
					<td>{{{ $profile_action->action_id }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('profile_actions.destroy', $profile_action->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('profile_actions.edit', 'Edit', array($profile_action->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no profile_actions
@endif

@stop
