<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// foreach (File::allFiles(__DIR__ . '/web') as $routeFile) require $routeFile->getPathname();
Route::get('/', function () {
    return view('welcome');
});


//Admin
Route::prefix('backend')->name('backend.')->namespace('App\Http\Controllers\Backend')->group(function () {
    $pref = 'categories';
    $ctrl = 'CategoryController';
    Route::resource($pref, $ctrl);
});
