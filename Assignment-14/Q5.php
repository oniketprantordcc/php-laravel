



/*
Question 5:
You are implementing a file upload feature in your Laravel application.
 Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in 
the 'public/uploads' directory. Use the original filename for the uploaded file.
*/







if ($request->hasFile('avatar')) {
    $file = $request->file('avatar');
    $filename = $file->getClientOriginalName();
    
    $file->move('uploads', $filename);
    
    // Additional logic or database storage as needed
}
