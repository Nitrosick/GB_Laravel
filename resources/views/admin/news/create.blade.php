@extends('layouts.admin')
@section('title') Add News @parent @stop
@section('content')

@include('inc.messages')

<form method="post" action="{{ route('admin.news.store') }}">
@csrf

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
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ old('author') }}">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! old('description') !!}</textarea>
</div>
<div class="form-group">
    <label for="short">Short description</label>
    <input type="text" name="short" id="short" value="{{ old('short') }}">
</div>

<button type="submit" class="success">SAVE</button>
</form>

@endsection
