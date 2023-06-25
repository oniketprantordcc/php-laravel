

Task 4:


Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.


 Ans:
/* In post Model--*/
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

/*In category Model--*/

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}










 


 




