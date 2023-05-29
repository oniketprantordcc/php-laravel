/*Task 5: Controller

Create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods:

index(): Display a list of all products.
create(): Display the form to create a new product.
store(): Store a newly created product.
edit($id): Display the form to edit an existing product.
update($id): Update the specified product.
destroy($id): Delete the specified product.

*/
php artisan make:controller ProductController --resource


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Display a list of all products
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Display the form to create a new product
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Store a newly created product
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        // Display the form to edit an existing product
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Update the specified product
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Delete the specified product
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
