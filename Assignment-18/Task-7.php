
Task 7:


Create a new route in the web.php file to handle the following URL pattern: "/posts/{id}/delete". 
Implement the corresponding controller method to delete a post by its ID. Soft delete should be used.


 Ans:

/* web.php */

use App\Http\Controllers\PostController;

Route::delete('/posts/{id}/delete', [PostController::class, 'destroy']);


/*In the corresponding controller */

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            // Post not found
            abort(404);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}



