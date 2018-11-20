<?php



Route::get('/test', function () {
    return view('seopage');
});
Route::get('app/get/some-data-from-laravel', [
    'uses' => 'HomeController@data',
]);
Route::post('/userAuthenticate', [
    'uses' => 'HomeController@userAuthenticate',
]);
Route::any('{slug}', [
    'uses' => 'HomeController@home',
])->where('slug', '([A-z\d-\/_.]+)?');

