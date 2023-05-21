/*Question 7:
Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, 
retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data:

{
    "success": true,
    "message": "Form submitted successfully."
}

*/


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');
    
  
    
    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];
    
    return response()->json($response);
});
