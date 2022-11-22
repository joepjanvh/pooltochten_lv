<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
Route::get('/user/{id}', [UserController::class, 'show']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//testroute

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//profile link
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');



//route after login disabled
//Route::get('/backend/{user}', [ProfilesController::class, 'index'])->name('backend');

//post creat link
Route::get('/p/create', [PostsController::class, 'create'])->name('posts.create');

//post store
Route::post('/p', [PostsController::class, 'store'])->name('posts.store');

//route after login and personal page
Route::get('/backend', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('backend');

require __DIR__.'/auth.php';
