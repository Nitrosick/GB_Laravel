@extends('layouts.admin')
@section('title') Edit News @parent @stop
@section('content')

<form method="post" action="{{ route('admin.news.update', ['news' => $news]) }}" enctype="multipart/form-data">
@csrf
@method('put')

<div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                    @if($news->category_id === $category->id) selected @endif>{{ $category->title }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="link">Link</label>
    <input type="text" name="link" id="link" value="{{ $news->link }}">
</div>

@error('link') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $news->title }}">
</div>

@error('title') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! $news->description !!}</textarea>
</div>

@error('description') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ $news->author }}">
</div>

@error('author') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
</div>

@error('image') <div class="alert">{{ $message }}</div> @enderror

<button type="submit" class="success">SAVE</button>
</form>

@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
