 


Task 10:


Create a new route in the web.php file to handle the following URL pattern: "/categories/{id}/posts". Implement the corresponding controller method to retrieve all posts belonging to a specific category. The category ID should be passed as a parameter to the method.


 
Ans:
/*routes/web.php*/
use App\Http\Controllers\CategoryController;

Route::get('/categories/{id}/posts', [CategoryController::class, 'getPostsByCategory']);


/*In the corresponding controller*/

<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);

        $posts = $category->posts;

        return view('posts', compact('posts'));
    }
}
