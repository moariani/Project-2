{{-- Attach Layout --}}
@extends('layouts.newsLayout')

{{-- Title Section --}}
@section('title', 'News')

{{-- Body Section --}}
@section('body')
    {{-- Carousel Part --}}
    <div class="container">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/i-1.png') }}" class="d-block w-100" alt="carousel-img">
                </div>
            </div>
        </div>
    </div>
    {{-- Main Part --}}
    <div class="container">
        {{-- Newest Post Part --}}
        <h2 class="mt-3">Newest news</h2>
        <div class="row">
            @foreach ($newestPosts as $newestPost)
                <div class="card newest-post-card">
                    <div class="card-body newest-post-card-body">
                        <h5 class="card-title text-light">{{ $newestPost->title }}</h5>
                        <p class="card-text text-light">{{ $newestPost->body }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('news.show', $newestPost->id) }}"
                            class="btn btn-outline-light mt-2 text-light">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Most Visited Post Part --}}
        <h2 class="mt-3">The most visited</h2>
        <div class="row">
            @foreach ($mostVisitedPosts as $mostVisitedPost)
                <div class="card most-visited-card">
                    <div class="card-body most-visited-card-body">
                        <h5 class="card-title text-light">{{ $mostVisitedPost->title }}</h5>
                        <p class="card-text text-light">{{ $mostVisitedPost->body }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('news.show', $mostVisitedPost->id) }}"
                            class="btn btn-outline-light mt-2 text-light">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Economic Post Part --}}
        <h2 class="mt-3">Economic</h2>
        <div class="row">
            @foreach ($posts as $post)
                @if ($post->category == 'Economic')
                    <div class="card col-12 mt-3 category-card">
                        <div class="card-body category-card-body">
                            <h5 class="card-title text-light">{{ $post->title }}</h5>
                            <p class="card-text text-light">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('news.show', $post->id) }}"
                                class="btn btn-outline-light mt-2 text-light">Read more</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- Political Post Part --}}
        <h2 class="mt-3">Political</h2>
        <div class="row">
            @foreach ($posts as $post)
                @if ($post->category == 'Political')
                    <div class="card col-12 mt-3 category-card">
                        <div class="card-body category-card-body">
                            <h5 class="card-title text-light">{{ $post->title }}</h5>
                            <p class="card-text text-light">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('news.show', $post->id) }}"
                                class="btn btn-outline-light mt-2 text-light">Read more</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- Sport Post Part --}}
        <h2 class="mt-3">Sport</h2>
        <div class="row">
            @foreach ($posts as $post)
                @if ($post->category == 'Sport')
                    <div class="card col-12 mt-3 category-card">
                        <div class="card-body category-card-body">
                            <h5 class="card-title text-light">{{ $post->title }}</h5>
                            <p class="card-text text-light">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('news.show', $post->id) }}"
                                class="btn btn-outline-light mt-2 text-light">Read more</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
