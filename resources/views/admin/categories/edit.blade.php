@extends('layouts.admin')
@section('title') Edit Category @parent @stop
@section('content')

<form method="post" action="{{ route('admin.categories.update', ['category' => $category]) }}">
@csrf
@method('put')

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $category->title }}">
</div>

@error('title') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="tag">Title</label>
    <input type="text" name="tag" id="tag" value="{{ $category->tag }}">
</div>

@error('tag') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! $category->description !!}</textarea>
</div>

@error('description') <div class="alert">{{ $message }}</div> @enderror

<button type="submit" class="success">SAVE</button>
</form>

@endsection
