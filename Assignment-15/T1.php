/*
Task 1: Request Validation

Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:
name: required, string, minimum length 2.email: required, valid email format.password: required, string, minimum length 8.
*/
//make request..
php artisan make:request RegistrationRequest


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }
}
