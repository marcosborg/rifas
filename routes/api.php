<?php

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::get('user', 'Api\AuthController@user');
    Route::get('getActiveGames', 'Api\GamesController@getActiveGames');
    Route::get('getStarsGame/{id}', 'Api\GamesController@getStarsGame');
    Route::get('checkStars/{id}/{star}', 'Api\GamesController@checkStars');
    Route::get('saveStars/{id}/{star1}/{star2}', 'Api\GamesController@saveStars');
    Route::get('checkCart', 'Api\GamesController@checkCart');
    Route::get('deleteStarItem/{id}', 'Api\GamesController@deleteStarItem');
    Route::get('deleteAllFromCart', 'Api\GamesController@deleteAllFromCart');
    Route::get('getEntityCategories', 'Api\GamesController@getEntityCategories');
    Route::get('getEntitySubCategories/{id}', 'Api\GamesController@getEntitySubCategories');
    Route::get('getEntities/{id}', 'Api\GamesController@getEntities');
    Route::post('updateUser', 'Api\AuthController@updateUser');
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Star
    Route::apiResource('stars', 'StarApiController');

    // Content Page
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Number
    Route::apiResource('numbers', 'NumberApiController');

    // Category
    Route::apiResource('categories', 'CategoryApiController');

    // Entity
    Route::apiResource('entities', 'EntityApiController');

    // Star Plays
    Route::apiResource('star-plays', 'StarPlaysApiController');

    // Number Plays
    Route::apiResource('number-plays', 'NumberPlaysApiController');

    // Play
    Route::apiResource('plays', 'PlayApiController');

    // Awards
    Route::post('awards/media', 'AwardsApiController@storeMedia')->name('awards.storeMedia');
    Route::apiResource('awards', 'AwardsApiController');

    // Benefactor
    Route::apiResource('benefactors', 'BenefactorApiController');
});
