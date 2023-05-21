/*Question 2:
In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request.
Write the code to accomplish this and store the value in a variable called $userAgent.
*/

$userAgent = $request->header('User-Agent');

public function processRequest(Request $request)
{
    $userAgent = $request->header('User-Agent');
    
    
}

