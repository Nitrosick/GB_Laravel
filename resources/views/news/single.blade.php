@extends('layouts.main')
@section('content')
@section('title') {{ $news->title }} @parent @stop

<a href="{{ $news->link }}" class="single_new">
    <img src="{{ asset('assets/images/big-plug.png') }}" alt="plug">
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->description }}</p>
    <div class="news_other">
        <i>Author: {{ $news->author }}</i>
        <i>{{ $news->created_at }}</i>
    </div>
</a>

@endsection
