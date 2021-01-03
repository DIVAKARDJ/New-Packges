<?php



Route::group(['namespace'=>'My\Pkg\Http\Controller'], function () {
    Route::get('pkg','PkgController@index')->name('pkg');
    
    Route::post('pkg','PkgController@store');
});