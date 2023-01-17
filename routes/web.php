<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Star
    Route::delete('stars/destroy', 'StarController@massDestroy')->name('stars.massDestroy');
    Route::resource('stars', 'StarController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Number
    Route::delete('numbers/destroy', 'NumberController@massDestroy')->name('numbers.massDestroy');
    Route::resource('numbers', 'NumberController');

    // Category
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoryController');

    // Entity
    Route::delete('entities/destroy', 'EntityController@massDestroy')->name('entities.massDestroy');
    Route::resource('entities', 'EntityController');

    // Star Plays
    Route::delete('star-plays/destroy', 'StarPlaysController@massDestroy')->name('star-plays.massDestroy');
    Route::resource('star-plays', 'StarPlaysController');

    // Number Plays
    Route::delete('number-plays/destroy', 'NumberPlaysController@massDestroy')->name('number-plays.massDestroy');
    Route::resource('number-plays', 'NumberPlaysController');

    // Play
    Route::delete('plays/destroy', 'PlayController@massDestroy')->name('plays.massDestroy');
    Route::resource('plays', 'PlayController');

    // Awards
    Route::delete('awards/destroy', 'AwardsController@massDestroy')->name('awards.massDestroy');
    Route::post('awards/media', 'AwardsController@storeMedia')->name('awards.storeMedia');
    Route::post('awards/ckmedia', 'AwardsController@storeCKEditorImages')->name('awards.storeCKEditorImages');
    Route::resource('awards', 'AwardsController');

    // Benefactor
    Route::delete('benefactors/destroy', 'BenefactorController@massDestroy')->name('benefactors.massDestroy');
    Route::resource('benefactors', 'BenefactorController');

    // Sub Category
    Route::delete('sub-categories/destroy', 'SubCategoryController@massDestroy')->name('sub-categories.massDestroy');
    Route::resource('sub-categories', 'SubCategoryController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});