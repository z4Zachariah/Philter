<?php namespace Zach\Philter;
use Route;



/**
 * Class to filer requests to the required methods.
 */
$api = new Classes\Api();


Route::post('philter/account', function() use($api){
    return $api->login();
});

Route::post('api/v1/login', function() use($api){
    return $api->registerUser();
});

Route::post('api/v1/login', function() use($api){
    return $api->logout();
});

Route::post('api/v1/login', function() use($api){
    return $api->getUser();
});

Route::post('api/v1/login', function() use($api){
    return $api->updateUser();
});

Route::post('api/v1/login', function() use($api){
    return $api->deleteUser();
});

Route::post('api/v1/login', function() use($api){
    return $api->getImages();
});

Route::post('api/v1/login', function() use($api){
    return $api->getImage();
});

Route::post('api/v1/login', function() use($api){
    return $api->addImage();
});

Route::post('api/v1/login', function() use($api){
    return $api->updateImage();
});

Route::post('api/v1/login', function() use($api){
    return $api->deleteImage();
});






Route::options('api/v1/{all}', function() {
    if (Request::getMethod() == "OPTIONS") {
        echo('You are connected to the API');
        die();
    }
});

Route::options('api/v1/{any}/{all}', function() {
    if (Request::getMethod() == "OPTIONS") {
        echo('You are connected to the API');
        die();
    }
});

/***** YOU NEED TO IMPLEMENT THE MISSING ROUTES *****/
