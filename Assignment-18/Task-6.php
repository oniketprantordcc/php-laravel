Task 6:


Implement a method in the "Post" model to get the total number of posts belonging to a specific category. The method should accept the category ID as a parameter and return the count.


 Ans:

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function countPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
}

/*To use this method, you can call it on the "Post" model, like so:  */

$categoryCount = Post::countPostsByCategory($categoryId);
