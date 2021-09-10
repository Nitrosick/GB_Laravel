@extends('layouts.admin')
@section('title') Add News @parent @stop
@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert">{{ $error }}</div>
    @endforeach
@endif

<form method="post" action="{{ route('admin.news.store') }}">
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
</div>
<button type="submit" class="success">SAVE</button>
</form>

@endsection
