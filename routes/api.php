<?php


// User Login
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function () {
    // user login
    Route::post('user_login', 'Api\ApiAuthController@login');
    // register user
    Route::post('user_register', 'Api\ApiAuthController@userRegister');

});


Route::group([
    'middleware' => ['api','jwt.verify'],
    'prefix' => 'auth'

], function () {
    // user logout
    Route::post('logout', 'Api\ApiAuthController@logout');
    Route::post('refresh', 'Api\ApiAuthController@refresh');
    Route::post('user_profile', 'Api\ApiAuthController@userProfile');
    Route::post('profile_update', 'Api\ApiAuthController@profileUpdate');

});

Route::group([
    'middleware' => ['api','jwt.verify'],
    'prefix' => 'post'

], function () {
    // Show All Post
    Route::get('show_ad', 'Api\UserAdPostController@showPost');
    Route::post('save_ad', 'Api\UserAdPostController@savePost');

    // show single user post history
    Route::get('show_my_post/{id}', 'Api\UserAdPostController@showMyPost');
    Route::get('show_ad_category/{category}', 'Api\UserAdPostController@showAdCategory');

    Route::get('show_my_post_view/{ad_id}', 'Api\UserAdPostController@showMyPostView');

    Route::post('change_my_add_status/{id}', 'Api\UserAdPostController@changeMyAddStatus');



});

Route::group([
    'middleware' => ['api','jwt.verify'],
    'prefix' => 'interest'

], function () {
    // Show All Post
    Route::post('user_interest', 'Api\UserInterestedController@userInterest');
    Route::get('show_my_interest/{user_id}', 'Api\UserInterestedController@showMyInterest');


});


Route::group([
    'middleware' => ['api','jwt.verify'],
    'prefix' => 'notification'

], function () {
    // Show All Post
    Route::get('show_notification', 'Api\NotificationController@showNotification');


});



Route::group([
    'middleware' => ['api','jwt.verify'],
    'prefix' => 'RentedAd'

], function () {
    // Show All Post
    Route::get('rented_ad/{id}', 'Api\RentedListController@rentedAd');
});

Route::group([
    'middleware' => ['api','jwt.verify'],
    'prefix' => 'history'

], function () {
    // Show All Post
    Route::get('show_history/{customer_id}', 'Api\UserHistoryController@showHistory');
});

