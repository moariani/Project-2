{{-- Attach Layout --}}
@extends('layouts.adminLayout')

{{-- Title Section --}}
@section('title', 'Admin Panel')

{{-- Top Header Box --}}
@section('header')
    <div class="container bg-light mt-2 p-4">
        <h2 class="text-primary pb-2">Hi {{ $currentUser->name }}</h2>
        <h5 class="text-primary">Welcome to the admin panel</h4>
        <h5 class="text-primary">You are logged in as <strong class="text-warning">{{ $currentUser->role }}</strong></h5>
    </div>
@endsection

{{-- Body Section --}}
@section('body')
    <div class="container mt-4">
        <div class="row">
            @can('isAdmin', 'App\User')
                {{-- Posts Details Card --}}
                <div class="card col-4 bg-success admin-card">
                    <div class="card-body m-4">
                        <h5 class="card-title">Post Details</h5>
                        <p class="card-text">In this section, you can see a list of posts of your website along with their
                            details</p>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-light mt-4 text-dark">Work with posts</a>
                    </div>
                </div>
                {{-- Comments Details Card --}}
                <div class="card col-4 bg-warning admin-card">
                    <div class="card-body m-4">
                        <h5 class="card-title">Comments Details</h5>
                        <p class="card-text">In this section, you can see a list of commnets of your website along with
                            their details</p>
                        <a href="{{ route('comment.index') }}" class="btn btn-outline-light mt-4 text-dark">Work with
                            comments</a>
                    </div>
                </div>
                {{-- Users Details Card --}}
                <div class="card col-4 bg-info admin-card">
                    <div class="card-body m-4">
                        <h5 class="card-title">Users Details</h5>
                        <p class="card-text">In this section, you can see a list of users of your website along with their
                            details</p>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-light mt-4 text-dark">Work with users</a>
                    </div>
                </div>
            @endCan
            @can('isWriter', 'App\User')
                {{-- Posts Details Card --}}
                <div class="card col-4 bg-success admin-card">
                    <div class="card-body m-4">
                        <h5 class="card-title">Post Details</h5>
                        <p class="card-text">In this section, you can see a list of posts of your website along with their
                            details</p>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-light mt-4 text-dark">Work with posts</a>
                    </div>
                </div>
            @endcan
        </div>
    </div>
@endsection
