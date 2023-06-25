

Task 11:


Implement a method in the "Category" model to get the latest post associated with the category. The method should return the post object.

Ans:

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}



$category = Category::find($categoryId);
$latestPost = $category->latestPost;
