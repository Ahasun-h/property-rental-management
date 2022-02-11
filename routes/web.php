<?php

Route::group(['middleware' => 'admin'], function() {
	// dashboard
	Route::get('/', 'HomeController@dashboard')->name('/');
	// admin profile
	Route::get('/profile', 'HomeController@showAdminProfile')->name('profile');
	// add user
	Route::get('/user/add', 'UserController@addUser')->name('add-user');
	Route::post('/user/save', 'UserController@saveUser')->name('user-save');
	Route::get('/user/manage', 'UserController@manageUser')->name('manage-user');
	Route::get('/user/ban/{id?}', 'UserController@banUser')->name('ban-user');
	Route::get('/user/active/{id?}', 'UserController@activeUser')->name('active-user');
	Route::get('/user/edit/{id?}', 'UserController@editUser')->name('edit-user');
	Route::get('/user/delete/{id?}', 'UserController@deleteUser')->name('delete-user');

	Route::get('/post/manage', 'AdPostController@managePost')->name('manage-post');
	Route::get('/post/delete/{id?}', 'AdPostController@deletePost')->name('delete-post');


 Route::get('/interest/manage', 'UserInterestController@manageInterest')->name('manage-interest');
 	Route::get('/interest/delete/{id?}', 'UserInterestController@deleteInterest')->name('delete-Interest');


});


// Authentication
// login
Route::get('/admin-login', 'AdminAuthenticationController@showLoginForm');
Route::post('/check-login', 'AdminAuthenticationController@checkAdminLogin')->name('checkLogin');
// admin logout
Route::post('/admin-logout', 'AdminAuthenticationController@adminLogout')->name('adminLogout');
