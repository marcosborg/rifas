<?php

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
