/*Question 1:
You have a Laravel application with a form that submits user information using a POST request. 
Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name.
*/

$name = $request->input('name');

public function store(Request $request)
{
    $name = $request->input('name');
    
 
}
