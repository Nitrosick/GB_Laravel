@extends('layouts.admin')
@section('title') Categories List @parent @stop
@section('content')

@include('inc.messages')

{!! $categoriesList->links() !!}

<table class="admin_table">
	<thead>
	<tr>
        <th>ID</th>
        <th>News count</th>
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
			<td>{{ $category->news_count }}</td>
			<td>{{ $category->title }}</td>
			<td>{{ $category->description }}</td>
			<td>{{ $category->created_at }}</td>
			<td>
				<a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Edit</a>
				<br>
				<a href="javascript:;" class="cayegory_delete" rel="{{ $category->id }}">Del.</a>
			</td>
		</tr>
		@empty
			<h2>No categories</h2>
		@endforelse
	</tbody>
</table>

{!! $categoriesList->links() !!}

@endsection

@push('js')
	<script type="text/javascript">
		$(function() {
			$(".cayegory_delete").on('click', function() {

				var id = $(this).attr("rel");

			    if(confirm("Are you sure you want to delete the category with ID " + id + "?")) {
				  	$.ajax({
						type: "delete",
						headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						url: "/admin/categories/" + id,
						success: function (response) {
							console.log(response);
							location.reload();
						},
						error: function (error) {
							console.log(error);
						}
					});
				}
			});
		});
	</script>
@endpush
