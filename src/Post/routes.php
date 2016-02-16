<?php

Route::group(['middleware' => ['web'], 'namespace' => 'posts'], function () {
    Route::resource('post', '\Etsh\Post\Controllers\PostController');
});