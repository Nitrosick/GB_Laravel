@extends('layouts.main')
@section('title') User Feedback @parent @stop
@section('content')

@include('inc.messages')

<form method="post" action="{{ route('feedback.store') }}">
@csrf
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="{{ old('username') }}">
</div>

<div class="form-group">
    <label for="content">Feedback</label>
    <textarea rows="10" name="content" id="content">{!! old('content') !!}</textarea>
</div>
<button type="submit" class="success">SEND</button>
</form>

@endsection
