{{-- Attach Layout --}}
@extends('layouts.adminLayout')

{{-- Title Section --}}
@section('title', 'Edit post')

{{-- Top Header Box --}}
@section('header')
    <div class="container bg-light mt-2 p-4">
        <h2 class="text-primary pb-2">Edit Post</h2>
    </div>
@endsection

{{-- Body Section --}}
@section('body')
    {{-- Error Component --}}
    @if($errors->any())
    @component('layouts.components.errors')
        @slot('err')
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endslot
        @slot('t_color' , 'dark')
        @slot('b_color' , 'warning')
    @endcomponent
    @endif
    {{-- Create Post Form --}}
    <div class="container best-space">
        <form method="post" action="{{ route('post.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="mb-1" for="title">Title:</label>
                <input type="text" class="form-control" name="title"  id="title" value="{{ $post->title }}">
            </div>
            <div class="form-group mt-2">
                <label class="mb-1" for="body">Body:</label>
                <textarea class="form-control" name="body" rows="10" id="body">{{ $post->body }}</textarea>
            </div>
            <div class="form-group mt-2">
                <label class="mb-1" for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option value="Economic" @if($post->category =='Economic') selected @endif>Economic</option>
                    <option value="Political" @if($post->category =='Political') selected @endif>Political</option>
                    <option value="Sport" @if($post->category =='Sport') selected @endif>Sport</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-lg mt-4">Edit</button>
        </form>
    </div>
@endsection
