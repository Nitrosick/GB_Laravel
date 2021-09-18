@extends('layouts.admin')
@section('title') News List @parent @stop
@section('content')

@include('inc.messages')

{!! $newsList->links() !!}

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>Category</th>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Short desc.</th>
        <th>Image</th>
        <th>Created</th>
        <th>Control</th>
	</tr>
	</thead>

	<tbody>
		@forelse($newsList as $news)
		<tr>
			<th>{{ $news->id }}</th>
			<td>{{ optional($news->category)->title }}</td>
			<td>{{ $news->title }}</td>
			<td>{{ $news->author }}</td>
			<td class="description_cell">{{ $news->description }}</td>
			<td>{{ $news->short }}</td>
			<td>{{ $news->image }}</td>
			<td>{{ $news->created_at }}</td>
			<td>
				<a href="{{ route('admin.news.edit', ['news' => $news->id]) }}">Edit</a>
				<br>
				<a href="{{ route('news_delete', ['id' => $news->id]) }}">Del.</a>
			</td>
		</tr>
		@empty
			<h2>No news</h2>
		@endforelse
	</tbody>
</table>

{!! $newsList->links() !!}

@endsection
