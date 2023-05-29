/*Task 7: Resource Controller

Create a resource controller called PostController that handles CRUD operations for a resource called Post.
 Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel.

*/ 

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create a new post
        $post = Post::create($validatedData);

        // Redirect to the post's show page
        return redirect()->route('posts.show', $post->id);
    }

    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

   
    public function update(Request $request, Post $post)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Update the post
        $post->update($validatedData);

        // Redirect to the post's show page
        return redirect()->route('posts.show', $post->id);
    }

    
    public function destroy(Post $post)
    {
        // Delete the post
        $post->delete();

        // Redirect to the posts index page
        return redirect()->route('posts.index');
    }
}
