<?php
use Illuminate\Support\Facades\Route;

/*
 * Here is where you can register any administration routes
 */

Route::get('dashboard', 'HomeController@index')->name('admin.home');
Route::get('apropos', 'AboutController@index')->name('admin.about');
Route::get('contact', 'ContactController@index')->name('admin.contact');

/*
 * Registration Routes
 */
Route::get('inscription', 'RegisterController@showRegistrationForm')->name('register');
Route::post('inscription', 'RegisterController@register');

/*
 * Action Routes
 */



/*
 * Home
 */
Route::resource('home/slide', 'Home\SlideController');
Route::resource('home/beta', 'Home\BetaController');
Route::resource('home/service', 'Home\ServiceController');
Route::resource('home/seattle', 'Home\SeattleController');
Route::resource('home/construction', 'Home\ConstructionController');
Route::resource('home/team', 'Home\TeamController');
Route::resource('home/member', 'Home\MemberController');


/*
 * Project
 */
Route::resource('project', 'Project\ProjectController');
Route::resource('projector', 'Project\ProjectorController');

/*
 * Blog
 */
Route::resource('posts', 'Blog\PostController');
Route::resource('categories', 'Blog\CategoryController');

/*
 * About
 */
Route::resource('about', 'About\AboutController');

/*
 * Contact
 */
Route::get('contact', 'Contact\ContactController@contact')->name('admin.contact');
Route::get('contact/{id}', 'Contact\ContactController@message')->name('admin.message');

/*
 * Job
 */
Route::get('job', 'Job\JobController@job')->name('job');
Route::get('job/{id}', 'Job\JobController@message')->name('job.message');

/*
 * Newsletter
 */
Route::get('newsletter', 'Newsletter\NewsletterController@newsletter')->name('admin.news');
