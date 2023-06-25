
Task 8:


Implement a method in the "Post" model to get all posts that have been soft deleted. The method should return a collection of soft deleted posts.

Ans:

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    public function getSoftDeletedPosts()
    {
        return $this->onlyTrashed()->get();
    }
}




$softDeletedPosts = Post::getSoftDeletedPosts();
