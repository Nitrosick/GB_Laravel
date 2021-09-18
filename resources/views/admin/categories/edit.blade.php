@extends('layouts.admin')
@section('title') Edit Category @parent @stop
@section('content')

@include('inc.messages')

<form method="post" action="{{ route('admin.categories.update', ['category' => $category]) }}">
@csrf
@method('put')

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $category->title }}">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! $category->description !!}</textarea>
</div>
<button type="submit" class="success">SAVE</button>
</form>

@endsection
