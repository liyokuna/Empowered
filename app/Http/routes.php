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
    return redirect('/home');
});
Route::get('home','homeController@index');


Route::get('abroad', function () {
    return redirect('/abroad');
});
Route::get('abroad','abroadController@index');

Route::get('start', function () {
    return redirect('/start');
});
Route::get('start','startController@index');

Route::get('individual', function () {
    return redirect('/individual');
});
Route::get('individual','individualController@index');

Route::get('business', function () {
    return redirect('/business');
});
Route::get('business','businessController@index');


Route::post('home', 'homeController@sendContactInfo');

Route::auth();

//Profile Area


Route::group([
'namespace'=>'profile',
'middleware'=>'auth',
], function () {
	Route::resource('profile/welcome', 'welcomeController');
	Route::resource('profile/business/profile', 'profile_businessController');
	Route::resource('profile/business/settings','settings_businessController',['expect'=>'show']);
	Route::resource('profile/business/settings/password','settings_businessPasswordController',['expect'=>'show']);
	Route::resource('profile/business/post','postController',['expect'=>'show']);
	Route::resource('/profile/business/skills','tag_skillsController',['expect'=>'show']);
	Route::resource('/profile/business/backgrounds','tag_backgroundsController',['expect'=>'show']);
	Route::resource('/profile/business/dashboard','dashboardController',['expect'=>'create','expect'=>'update','expect'=>'edit']);
	
	Route::resource('/profile/empowered','empowered_profileController',['expect'=>'index','expect'=>'create','expect'=>'update','expect'=>'edit']);
	Route::resource('/profile/empowered/business','business_profileController',['expect'=>'index','expect'=>'create','expect'=>'update','expect'=>'edit']);
	
	
	Route::resource('profile/applicant/profile', 'profile_applicantController',['except' => 'show']);
	Route::resource('profile/applicant/profile/infos', 'profile_applicant_infosController',['except' => 'show']);
	Route::resource('profile/applicant/profile/backgrounds','profile_applicant_backgroundsController',['expect'=>'show']);
	Route::resource('profile/applicant/profile/experiences','profile_applicant_experiencesController',['expect'=>'show']);
	Route::resource('profile/applicant/profile/skills','profile_applicant_skillsController',['expect'=>'show']);
	Route::resource('profile/applicant/profile/settings','settings_applicantController',['expect'=>'show']);
	Route::resource('profile/applicant/profile/settings/password','settings_applicantPasswordController',['expect'=>'show']);
	Route::resource('profile/applicant/posts','postsController');
	Route::resource('profile/applicant/list','listController',['expect'=>'create','expect'=>'edit','expect'=>'delete','expect'=>'update']);
	
	
	Route::resource('/profile/admin/stats','statsController',['expect'=>'create','expect'=>'update','expect'=>'edit']);
	Route::resource('/profile/admin/business','adminBusinessController');
	Route::resource('/profile/admin/applicants','adminApplicantsController');
	Route::resource('/profile/admin/users','adminUsersController');
	Route::resource('profile/admin/settings','settings_adminController');
	Route::resource('/profile/admin/password','admin_passwordController');
	
	Route::resource('/profile/empoweredAdmin','empowered_profileAdminController',['expect'=>'index','expect'=>'create','expect'=>'update','expect'=>'edit']);
	Route::resource('/profile/empoweredAdmin/business','business_profileAdminController',['expect'=>'index','expect'=>'create','expect'=>'update','expect'=>'edit']);
	
	Route::get('auth/linkedin', 'linkedinController@redirectToProvider');
	Route::get('auth/linkedin/callback', 'linkedinController@handleProviderCallback');
});
Route::get('auth/logout', 'Auth\AuthController@logout');

