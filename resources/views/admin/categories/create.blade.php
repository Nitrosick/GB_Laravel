@extends('layouts.admin')
@section('title') Add Category @parent @stop
@section('content')

<form method="post" action="{{ route('admin.categories.store') }}">
@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
</div>

@error('title') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" name="tag" id="tag" value="{{ old('tag') }}">
</div>

@error('tag') <div class="alert">{{ $message }}</div> @enderror

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! old('description') !!}</textarea>
</div>

@error('description') <div class="alert">{{ $message }}</div> @enderror

<button type="submit" class="success">SAVE</button>
</form>

@endsection
