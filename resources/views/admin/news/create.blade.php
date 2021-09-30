@extends('layouts.admin')
@section('title') Add News @parent @stop
@section('content')

<form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="guid" id="guid" value="{{ uniqid('guid_', true) }}">

<div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
            @if(old('category_id') === $category->id) selected @endif>{{ $category->title }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="link">Link</label>
    <input type="text" name="link" id="link" value="{{ old('link') }}">
</div>

@error('link') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
</div>

@error('title') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! old('description') !!}</textarea>
</div>

@error('description') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ old('author') }}">
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
