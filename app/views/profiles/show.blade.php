@extends('layouts.scaffold')

@section('main')

<h1>Show Profile</h1>

<p>{{ link_to_route('profiles.index', 'Return to All profiles', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

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
			<td>{{{ $profile->enable }}}</td>
					<td>{{{ $profile->name }}}</td>
					<td>{{{ $profile->description }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('profiles.destroy', $profile->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('profiles.edit', 'Edit', array($profile->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
