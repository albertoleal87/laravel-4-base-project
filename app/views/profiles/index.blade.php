@extends('layouts.scaffold')

@section('main')

<h1>All Profiles</h1>

<p>{{ link_to_route('profiles.create', 'Add New Profile', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($profiles->count())
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
			@foreach ($profiles as $profile)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no profiles
@endif

@stop
