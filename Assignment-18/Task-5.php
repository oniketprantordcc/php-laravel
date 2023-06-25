Task 5:
Write a query using Eloquent ORM to retrieve all posts along with their associated categories. Make sure to eager load the categories to optimize the query.

Ans:
$posts = Post::with('category')->get();

foreach ($posts as $post) {
    echo "Post Title: " . $post->title . "\n";
    echo "Category Name: " . $post->category->name . "\n";
    echo "\n";
}
