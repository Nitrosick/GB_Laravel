@extends('layouts.main')
@section('title') News @parent @stop
@section('content')

<div class="news_block">
    @forelse ($newsList as $value)
        <a class="news_tile" href='{{ route('news_by_id', ['news_id' => $value->id]) }}'>
            <img src="{{ asset('assets/images/news-plug.png') }}" alt="plug">
            <h2>{{ $value->title }}</h2>
            <span class="short">{{ $value->short }}</span>
        </a>
    @empty
        <h2>No news</h2>
    @endforelse
</div>

{!! $newsList->links() !!}

@endsection
