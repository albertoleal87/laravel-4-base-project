@extends('layouts.scaffold')

@section('main')

<h1>Show User</h1>

<p>{{ link_to_route('users.index', 'Return to All users', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Enable</th>
				<th>Profile_id</th>
				<th>Name</th>
				<th>Last_name</th>
				<th>Mother_last_name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Remember_token</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $user->enable }}}</td>
					<td>{{{ $user->profile_id }}}</td>
					<td>{{{ $user->name }}}</td>
					<td>{{{ $user->last_name }}}</td>
					<td>{{{ $user->mother_last_name }}}</td>
					<td>{{{ $user->email }}}</td>
					<td>{{{ $user->password }}}</td>
					<td>{{{ $user->remember_token }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
