<?php

Route::group(['middleware' => ['web'], 'namespace' => 'post'], function () {
    Route::resource('post', '\Etsh\Post\Controllers\PostController');
});