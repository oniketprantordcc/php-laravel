/*
Task 1:
Create a new migration file to add a new table named "categories" to the database. The table should have the following columns:
*/
id (primary key, auto-increment)
name (string)
created_at (timestamp)
updated_at (timestamp)
 
Ans:
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
