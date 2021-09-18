@extends('layouts.admin')
@section('title') Edit News @parent @stop
@section('content')

@include('inc.messages')

<form method="post" action="{{ route('admin.news.update', ['news' => $news]) }}">
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
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $news->title }}">
</div>
<div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ $news->author }}">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! $news->description !!}</textarea>
</div>
<div class="form-group">
    <label for="short">Short description</label>
    <input type="text" name="short" id="short" value="{{ $news->short }}">
</div>

<button type="submit" class="success">SAVE</button>
</form>

@endsection
