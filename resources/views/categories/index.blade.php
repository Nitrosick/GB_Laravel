@extends('layouts.main')
@section('content')
@section('title') News Categories @parent @stop

<div class="categories_block">
    @forelse ($categoriesArray as $value)
        <a class="category_tile" href='{{ route('news_by_cat', ['category_id' => $value['id']]) }}'>
            <img src="{{ asset('assets/images/category-plug.png') }}" alt="plug">
            <h2>{{ $value['name'] }}</h2>
        </a>
    @empty
        <h2>No data</h2>
    @endforelse
</div>

@endsection
