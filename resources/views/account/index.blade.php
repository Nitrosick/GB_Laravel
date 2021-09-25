@extends('layouts.main')
@section('title') User Account @parent @stop
@section('content')

<div class="welcome">
    @if (!Auth::user())
        <h2>LOG IN!</h2>
    @else
        <img src="{{ asset('assets/images/welcome.png') }}" alt="welcome">
        <h2>{{ Auth::user()->name }}</h2>
        <br>
        <a class="to_admin" href="{{ route('admin.news.index') }}">ADMIN BAR</a>
    @endif
</div>

@endsection
