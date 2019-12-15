<?php



Route::group([
    'namespace'     => 'Lee\Contact\Controllers',
    'middleware'    => ['web']
], function (){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@postContact');
});
