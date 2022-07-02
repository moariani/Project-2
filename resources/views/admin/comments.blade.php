{{-- Attach Layout --}}
@extends('layouts.adminLayout')

{{-- Title Section --}}
@section('title', 'Comments')

{{-- Top Header Box --}}
@section('header')
    <div class="container bg-light mt-2 p-4">
        <h2 class="text-primary pb-2">Comments Details</h2>
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
            @slot('b_color' , 'success')
        @endcomponent
    @endif
    {{-- Comments Deatils Table--}}
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Body</th>
                    <th scope="col">PostTitle</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->id }}</th>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->body }}</td>
                        <td>{{ $comment->post->title }}</td>
                        <td>{{ $comment->created_at }}</td>
                        <td>
                            <form class="form-inline " method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                                @csrf
                                @method('DELETE')
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-outline-danger text-dark">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
