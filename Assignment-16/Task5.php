/*
Task 5:
Create a new migration file named "add_category_to_products_table" that will be responsible for adding a new column 
called "category" to the "products" table. The "category" column should be a string column with a maximum length of 50 characters. 
*/
//
php artisan make:migration add_category_to_products_table --table=products

//
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category', 50)->nullable();
            $table->timestamps('created_at')->useCurrent();
            $table->timestamps('updated_at')->useCurrent()->useCurentOnUpdate();
     
        });
    }

   
}

//
php artisan migrate
