<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@general')->name('general');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('send-mail-two', 'HomeController@sendMail');

Route::post('/posts', 'HomeController@posts')->name('posts');

Route::get('/choose-payment', 'HomeController@paypal')->name('paypal');

Route::post('/make-payment', ['uses'=>'HomeController@postPayment', 'as'=>'post.payment']);

Route::get('/send-mail', function () {

	   $post = \App\Posts::find(1);

    Mail::to($post->email)->send(new \App\Mail\SendMails($post));

    dd("Email is Send.");

})->name('mail');
