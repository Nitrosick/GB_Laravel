@extends('layouts.admin')
@section('title') News List @parent @stop
@section('content')

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Short desc.</th>
        <th>Created</th>
        <th>Control</th>
	</tr>
	</thead>

	<tbody>
		@forelse($newsList as $news)
		<tr>
			<th>{{ $news->id }}</th>
			<td>{{ $news->title }}</td>
			<td>{{ $news->author }}</td>
			<td>{{ $news->description }}</td>
			<td>{{ $news->short }}</td>
			<td>{{ $news->created_at }}</td>
			<td>
				<a href="{{ route('admin.news.edit', ['news' => $news->id]) }}">Edit</a>
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
