@extends('layouts.admin')
@section('title') Add Category @parent @stop
@section('content')

@include('inc.messages')

<form method="post" action="{{ route('admin.categories.store') }}">
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea rows="10" name="description" id="description">{!! old('description') !!}</textarea>
</div>
<button type="submit" class="success">SAVE</button>
</form>

@endsection
