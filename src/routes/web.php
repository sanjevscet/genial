<?php

Route::group(['namespace' => '\Genial\Blog\Http\Controllers', 'middleware' => ['web', 'auth'], 'prefix' => 'genial'], function () {
    Route::get('blogs', 'BlogController@index')->name('genial.blogs');
    Route::get('blogs/create', 'BlogController@create')->name('genial.blogs.create');
    Route::post('blogs/create', 'BlogController@store')->name('genial.blogs.create');
    //Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
