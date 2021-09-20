@extends('layouts.admin')
@section('title') User Requests @parent @stop
@section('content')

@include('inc.messages')

{!! $requestsList->links() !!}

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>Username</th>
        <th>Phone</th>
        <th>E-Mail</th>
        <th>Message</th>
        <th>Created</th>
	</tr>
	</thead>

	<tbody>
		@forelse($requestsList as $request)
		<tr>
			<th>{{ $request->id }}</th>
			<td>{{ $request->username }}</td>
			<td>{{ $request->phone }}</td>
			<td>{{ $request->email }}</td>
			<td>{{ $request->content }}</td>
			<td>{{ $request->created_at }}</td>
		</tr>
		@empty
			<h2>No requests</h2>
		@endforelse
	</tbody>
</table>

{!! $requestsList->links() !!}

@endsection
