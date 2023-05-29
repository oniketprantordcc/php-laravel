/*Task 6: Single Action Controller


Create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method to process the
 form submission and send an email to a predefined address with the submitted data.


 */
php artisan make:controller ContactController --invokable


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        // Process the contact form submission
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Send email to predefined address with submitted data
        Mail::raw("Name: $name\nEmail: $email\nMessage: $message", function ($message) {
            $message->to('your-email@example.com')->subject('New Contact Form Submission');
        });

        // Redirect or show success message
        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
