<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	// \Mail::send('emails.auto', ['user' => "wdw"], function ($m) {
 //            $m->from('from@gmail.com', 'Your Application');

 //            $m->to('slavensakacic@gmail.com', "Slaven Sakačić")->subject('Your Reminder!');
 //        });
    return view('index.index');
});

Route::post('contactengine', ['as' => 'contactengine', function () {
	$lorem= Input::all();
   return view('contactengine')->with($lorem);
}]);