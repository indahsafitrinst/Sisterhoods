<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;



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

//Authentication
Route::get('admin', [CustomAuthController::class, 'admin']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//Main page
Route::get('/', 'MainController@home');
Route::get('/vision-mission', 'MainController@visimisi');
Route::get('/meet-the-team', 'MainController@member');
Route::get('/article', 'MainController@article');
Route::get('/events', 'MainController@events');
Route::get('/suara-wanita', 'MainController@suara');
Route::get('/form-suara-wanita', 'MainController@inputsw');
Route::get('/get-involved', 'SubmissionController@create');


//Admin 
Route::post('/admin', 'AuthSubmissionController@home');
Route::post('/admin/submission', 'SubmissionController@store');
Route::get('/admin/submission', 'SubmissionController@index');
Route::get('/admin/submission/{subs_id}', 'SubmissionController@show');
Route::delete('/admin/submission/{subs_id}', 'SubmissionController@destroy');
Route::get('/admin/add-article', 'ArticleController@create');
Route::post('/admin/list-article', 'ArticleController@store');
Route::get('/admin/list-article', 'ArticleController@index');
Route::delete('/admin/article/{article_id}', 'ArticleController@destroy');

