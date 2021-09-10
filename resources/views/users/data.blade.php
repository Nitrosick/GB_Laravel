@extends('layouts.main')
@section('title') Request Data @parent @stop
@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert">{{ $error }}</div>
    @endforeach
@endif

<form method="post" action="{{ route('admin.users.store', ['data' => 1]) }}">
@csrf
<div class="form-group">
    <label for="username">Name</label>
    <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
</div>
<div class="form-group">
    <label for="email">E-Mail</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
</div>

<div class="form-group">
    <label for="data">Data to receive</label>
    <textarea rows="10" class="form-control" name="data" id="data">{!! old('data') !!}</textarea>
</div>
<button type="submit" class="success">REQUEST</button>
</form>

@endsection
