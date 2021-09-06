@extends('layouts.admin')
@section('content')
@section('title') News List @parent @stop

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created</th>
        <th>Control</th>
	</tr>
	</thead>

	<tbody>
		@forelse($newsList as $news)
		<tr>
			<th>{{ $news['id'] }}</th>
			<td>{{ $news['title'] }}</td>
			<td>{{ $news['description'] }}</td>
			<td>{{ now()->format('d-m-Y H:i') }}</td>
			<td>
				<a href="#">Edit</a>
				<br>
				<a href="#">Del.</a>
			</td>
		</tr>
		@empty
			<h2>No news</h2>
		@endforelse
	</tbody>
</table>

@endsection
