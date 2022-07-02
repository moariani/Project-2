{{-- Attach Layout --}}
@extends('layouts.adminLayout')

{{-- Title Section --}}
@section('title', 'Posts')

{{-- Top Header Box --}}
@section('header')
    <div class="container bg-light mt-2 p-4">
        <h2 class="text-primary pb-2">Posts Details</h2>
    </div>
@endsection

{{-- Body Section --}}
@section('body')
    <div class="container mt-4">
        <a href="{{ route('post.create') }}" class="btn btn-success btn-lg" role="button">Create new post</a>
    </div>
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
    {{-- Psots Details Table --}}
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Category</th>
                    <th scope="col">user</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <form class="form-inline"  method="POST" action="{{ route('post.destroy', $post->id ) }}">
                            @csrf
                            @method('DELETE')
                            <div class="btn-group">
                                <a class="btn btn-outline-warning text-dark"
                                    href="{{ route('post.edit', $post->id ) }}">edit</a>
                                <button type="submit" class="btn btn-outline-danger text-dark">Delete</a>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
{{-- kernel.loction().kernellocation()
    kerenllocation.json() ;
    json.location() ;
    hint.kernel.location() ;
    --}}
