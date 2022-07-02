{{-- Attach Layout --}}
@extends('layouts.adminLayout')

{{-- Title Section --}}
@section('title', 'Create post')

{{-- Top Header Box --}}
@section('header')
    <div class="container bg-light mt-2 p-4">
        <h2 class="text-primary pb-2">Create Post</h2>
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
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="form-group">
                <label class="mb-1" for="title">Title:</label>
                <input type="text" class="form-control" name="title" placeholder="Add post title" id="title">
            </div>
            <div class="form-group mt-2">
                <label class="mb-1" for="body">Body:</label>
                <textarea class="form-control" name="body" placeholder="Add post body" rows="10" id="body"></textarea>
            </div>
            <div class="form-group mt-2">
                <label class="mb-1" for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option value="Economic">Economic</option>
                    <option value="Political">Political</option>
                    <option value="Sport">Sport</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="{{ $currentUser }}">
            </div>
            <button type="submit" class="btn btn-success btn-lg mt-4">Create</button>
        </form>
    </div>
@endsection
