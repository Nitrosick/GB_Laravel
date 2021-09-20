@extends('layouts.admin')
@section('title') User Feedbacks @parent @stop
@section('content')

@include('inc.messages')

{!! $feedbacksList->links() !!}

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>Username</th>
        <th>Feedback</th>
        <th>Created</th>
	</tr>
	</thead>

	<tbody>
		@forelse($feedbacksList as $feedback)
		<tr>
			<th>{{ $feedback->id }}</th>
			<td>{{ $feedback->username }}</td>
			<td>{{ $feedback->content }}</td>
			<td>{{ $feedback->created_at }}</td>
		</tr>
		@empty
			<h2>No feedbacks</h2>
		@endforelse
	</tbody>
</table>

{!! $feedbacksList->links() !!}

@endsection
