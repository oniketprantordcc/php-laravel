/*Question 3:
You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter.
Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page.
If the parameter is not present, set $page to null.*/

$page = $request->query('page', null);

public function getItems(Request $request)
{
    $page = $request->query('page', null);
    
  }
