<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

    //use App\Http\Middleware\HelloMiddleware;
    Route::get('hello', 'HelloController@index');
    Route::post('hello', 'HelloController@post');

    Route::get('/er', 'erController@index');
    Route::post('/er', 'erController@post');

Route::get('/signin',[
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
]);



    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
?>

