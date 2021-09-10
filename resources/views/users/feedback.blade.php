@extends('layouts.main')
@section('title') User Feedback @parent @stop
@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert">{{ $error }}</div>
    @endforeach
@endif

<form method="post" action="{{ route('admin.users.store', ['feedback' => 1]) }}">
@csrf
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
</div>

<div class="form-group">
    <label for="feedback">Feedback</label>
    <textarea rows="10" class="form-control" name="feedback" id="feedback">{!! old('feedback') !!}</textarea>
</div>
<button type="submit" class="success">SEND</button>
</form>

@endsection
