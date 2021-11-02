<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostLikesController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::resource('/feed', PostController::class);

Route::get('/profile/{user:username}', [UserController::class, 'showUserProfile']);

Route::resource('/profile', UserController::class);

Route::post('/posts/{post}/like', [PostLikesController::class, 'store']);
Route::delete('/posts/{post}/like', [PostLikesController::class, 'destroy']);



require __DIR__.'/auth.php';