<?php
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

/*
 * Pages Routes
 */

Route::get('/', 'Pages\HomeController@index')->name('home');
Route::get('/apropos', 'Pages\AboutController@index')->name('about');
Route::get('/projets', 'Pages\ProjectController@index')->name('project');
Route::get('/contact', 'Pages\ContactController@index')->name('contact');

Route::post('/contact', 'Pages\ContactController@postContact')->name('contact.post');

Route::get('/jobs', 'Pages\JobController@index')->name('home.job');
Route::post('/jobs', 'Pages\JobController@job')->name('job.post');

Route::get('/blog', 'Pages\BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'Pages\BlogController@single')->name('blog.single');

/*
 * Authentication Routes
 */

Route::get('/connexion', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/connexion', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

/*
 * Newsletter
 */
Route::post('newsletter', 'Pages\NewsletterController@newsletter')->name('news.post');
