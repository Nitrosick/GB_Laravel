@extends('layouts.admin')
@section('title') Users @parent @stop
@section('content')

@include('inc.messages')

{!! $usersList->links() !!}

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Created</th>
        <th>Admin</th>
	</tr>
	</thead>

	<tbody>
		@foreach($usersList as $user)
		<tr>
			<th>{{ $user->id }}</th>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at }}</td>
			<td class="form_cell">
				@if ($user->is_admin)
					<form method="post" action="{{ route('admin.users.update', ['user' => $user->id]) }}">
						@csrf
						@method('put')

						<input type="hidden" name="is_admin" id="is_admin" value="1">
						<input type="hidden" name="name" id="name" value="{{ $user->name }}">

						<button type="submit" class="success">YES</button>
					</form>
				@else
					<form method="post" action="{{ route('admin.users.update', ['user' => $user->id]) }}">
						@csrf
						@method('put')

						<input type="hidden" name="is_admin" id="is_admin" value="0">
						<input type="hidden" name="name" id="name" value="{{ $user->name }}">

						<button type="submit" class="success">NO</button>
					</form>
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{!! $usersList->links() !!}

@endsection
