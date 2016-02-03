<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/about', function () {
    return View::make('about');
});

Route::get('/contact',function() {
	return View::make('contact');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('contact',function() {
	$data=Input::all(); $rules=array(
		'subject' => 'required',
		'email' => 'required|email',
		'phone' => 'required|min:10|max:10',
        'message' => 'required'
        ); 
	$validator=Validator::make($data,$rules);

	if($validator->fails()) {
		return Redirect::to('contact')->withErrors($validator)->withInput();
	}

	/*
	|--------------------------------------------------------------------------
	| Methods and functions for sending the email
	|--------------------------------------------------------------------------
	|
	| With the following code you'll be able to send emails
	|
	*/
	/*
	$emailcontent = array (
		'subject' => $data['subject'],
		'email' => $data['email'],
		'phone' => $data['phone'],
		'emailmessage' => $data['message']
	);

	Mail::send('emails.contactemail',$emailcontent,function($message) {
		$message->to('cpadilla@togetherhome.com','Mail submitted')
		->subject('Contacted via My Contact Form');
	});*/
	
	return 'Your message has been sent';
});