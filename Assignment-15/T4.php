/*Task 4: Route Middleware


Create a route group for authenticated users only. This group should include routes for /profile and /settings. Apply a middleware called AuthMiddleware to the route group to ensure only authenticated users can access these routes.
*/
//make middleware--
php artisan make:middleware AuthMiddleware
 

public function handle($request, Closure $next)
{
    if (Auth::check()) {
        // User is authenticated, allow access to the route
        return $next($request);
    }

    // User is not authenticated, redirect to the login page
    return redirect('/login');
}

//Register the middleware in the $routeMiddleware array in the app/Http/Kernel.php file. Add the following line to the array:
'auth' => \App\Http\Middleware\AuthMiddleware::class,


//
Route::middleware('auth')->group(function () {
    Route::get('/profile', 'ProfileController@index');
    Route::get('/settings', 'SettingsController@index');
});
