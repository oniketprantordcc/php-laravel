/*
Task 7:

Create a new migration file named "create_orders_table" that will be responsible for creating a table called "orders" in the database. The "orders" table should have the following columns:

id: an auto-incrementing integer and primary key.
product_id: an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table.
quantity: an integer column to store the quantity of products ordered.
created_at: a timestamp column to store the creation date and time.
updated_at: a timestamp column to store the last update date and time.
*/
//
php artisan make:migration create_orders_table
//
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->timestamps('created_at')->useCurrent();
            $table->timestamps('updated_at')->useCurrent()->useCurentOnUpdate();
        });
    }

    
}

//
php artisan migrate
