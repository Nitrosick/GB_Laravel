@extends('layouts.main')
@section('title') News @parent @stop
@section('content')

<div class="news_block">
    @forelse ($newsList as $news)
        <a class="news_tile" href='{{ route('news_by_id', ['news_id' => $news->id]) }}'>
            <img src="{{ Storage::disk('public')->url($news->image) }}" alt="image">
            <span>{{ $news->title }}</span>
        </a>
    @empty
        <h2>No news</h2>
    @endforelse
</div>

{!! $newsList->links() !!}

@endsection
