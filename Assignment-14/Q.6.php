/*Question 6:
Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it 
in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null.
*/

$rememberToken = $request->cookie('remember_token', null);

public function processRequest(Request $request)
{
    $rememberToken = $request->cookie('remember_token', null);
    
    }
