@extends('layouts.admin')
@section('title') Categories List @parent @stop
@section('content')

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
		@forelse($categoriesList as $category)
		<tr>
			<th>{{ $category->id }}</th>
			<td>{{ $category->title }}</td>
			<td>{{ $category->description }}</td>
			<td>{{ $category->created_at }}</td>
			<td>
				<a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Edit</a>
				<br>
				<a href="#">Del.</a>
			</td>
		</tr>
		@empty
			<h2>No categories</h2>
		@endforelse
	</tbody>
</table>

@endsection
