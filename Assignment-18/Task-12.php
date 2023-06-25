
Task 12:


Write a Blade template to display the latest post for each category. Use a loop to iterate over the categories and display the post details.


Ans:

<!-- latest-posts.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Latest Posts</h1>

    @foreach($categories as $category)
        <div class="category">
            <h2>{{ $category->name }}</h2>
            @if ($category->latestPost)
                <div class="post">
                    <h3>{{ $category->latestPost->title }}</h3>
                    <p>{{ $category->latestPost->content }}</p>
                    <p><strong>Posted at:</strong> {{ $category->latestPost->created_at }}</p>
                </div>
            @else
                <p>No posts available for this category.</p>
            @endif
        </div>
    @endforeach
@endsection








return view('latest-posts', ['categories' => $categories]);
