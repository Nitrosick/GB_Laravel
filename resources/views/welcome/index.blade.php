@extends('layouts.main')
@section('content')
@section('title') Welcome to News Agreagtor! - @parent @stop

<div class="welcome">
    <img src="{{ asset('assets/images/welcome.png') }}" alt="welcome">
    <span>
        Hello, user! You got into a news aggregator, which means that here you will see different news, because here they are aggregated, or in other words, they are collected together.<br>
        News comes from different fields, such as sports, medicine, technology, etc. Everyone will find news to their liking.
    </span>
</div>

@endsection
