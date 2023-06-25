/*
Task 2:
Create a new model named "Category" associated with the "categories" table. 
Define the necessary properties and relationships.
*/

Ans:

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

/*
In this example:

The Category model is created in the App\Models namespace.
The $table property is set to 'categories' to associate the model with the "categories" table.
The $fillable property is used to specify the fields that are mass assignable when creating or updating a category.
 In this case, only the "name" field is allowed.
The products method defines a one-to-many relationship with the Product model. It assumes that the Product model has
 a foreign key column named "category_id" that references the "id" column in the "categories" table.
 
*/