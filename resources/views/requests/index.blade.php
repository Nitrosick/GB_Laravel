@extends('layouts.main')
@section('title') Request Data @parent @stop
@section('content')

@include('inc.messages')

<form method="post" action="{{ route('request.store') }}">
@csrf
<div class="form-group">
    <label for="username">Name</label>
    <input type="text" name="username" id="username" value="{{ old('username') }}">
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}">
</div>
<div class="form-group">
    <label for="email">E-Mail</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">
</div>

<div class="form-group">
    <label for="content">Data to receive</label>
    <textarea rows="10" name="content" id="content">{!! old('content') !!}</textarea>
</div>
<button type="submit" class="success">REQUEST</button>
</form>

@endsection
