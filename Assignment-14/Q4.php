/*Q.Create a JSON response in Laravel with the following data:

{
    "message": "Success",

    "data": {

        "name": "John Doe",

        "age": 25

    }

}

*/


/*commend to get response*/
$response = [
    'message' => 'Success',
    'data' => [
        'name' => 'John Doe',
        'age' => 25
    ]
];

return response()->json($response);

/*the response*/

{
    "message": "Success",
    "data": {
        "name": "John Doe",
        "age": 25
    }
}
