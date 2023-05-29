
/*
Task 3: Global Middleware


Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.

*/

//make middleware...
php artisan make:middleware LogRequestsMiddleware


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestsMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('Request Method: ' . $request->method());
        Log::info('Request URL: ' . $request->fullUrl());

        return $next($request);
    }
}

//App\Http\Kernel class...
protected $middleware = [
    
    \App\Http\Middleware\LogRequestsMiddleware::class,
];


 