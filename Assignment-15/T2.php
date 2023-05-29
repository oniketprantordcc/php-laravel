/*Task 2: Request Redirect


Create a route /home that redirects to /dashboard using a 302 redirect.
*/
use Illuminate\Support\Facades\Redirect;

Route::get('/home', function () {
    return Redirect::to('/dashboard', 302);
});
