<?php

/**
 * Profile Controller
 */

Route::group(['as' => 'usermgmt::'], function () {
    Route::resource('users', '\UserMgmt\Controllers\UserController');
    Route::get('users/{id}/password', '\UserMgmt\Controllers\UserController@password')->name('users.password');
    Route::patch('users/{id}/pw_update', '\UserMgmt\Controllers\UserController@update_password')->name('users.update_password');
});

