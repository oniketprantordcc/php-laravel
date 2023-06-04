/*
Task 2:

Within the project, create a new migration file named "create_products_table" that will be responsible for 
creating a table called "products" in the database. The "products" table should have the following columns:


id: an auto-incrementing integer and primary key.
name: a string column to store the product name.
price: a decimal column to store the product price.
description: a text column to store the product description.
created_at: a timestamp column to store the creation date and time.
updated_at: a timestamp column to store the last update date and time.

*/ 
 
//
php artisan make:migration create_products_table --create=products


//
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->timestamps('created_at')->useCurrent();
            $table->timestamps('updated_at')->useCurrent()->useCurentOnUpdate();
     
        });
    }

  
}

//

php artisan migrate

