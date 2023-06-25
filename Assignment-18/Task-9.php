

Task 9:


Write a Blade template to display all posts and their associated categories. Use a loop to iterate over the posts and display their details.

Ans:

<!-- posts.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p><strong>Category:</strong> {{ $post->category->name }}</p>
        </div>
    @endforeach
@endsection



return view('posts', ['posts' => $posts]);
