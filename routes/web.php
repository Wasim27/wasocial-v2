<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return view('home', [
//         'userCount' => User::count()
//     ]);
// });
Route::get('/', [WelcomeController::class, 'index']);

// Route::get('/feed', function () {
//     $curUser = auth()->user();
//     return view('dashboard', [
//         'posts' => Post::latest('posted_at')->get(),
//     ]);
// })->middleware(['auth'])->name('dashboard');

// Route::get('/posts', [PostController::class, 'index'])->name('dashboard');
Route::resource('/feed', PostController::class);


// Route::get('/profile/{user:username}', function (User $user) {
//     return view('userProfile', [
//         'profileName' => $user->username,
//         'posts' => $user->posts,
//     ]);
// });

Route::get('/profile/{user:username}', [UserController::class, 'showUserProfile']);

// Route::get('/profile', function (User $user) {
//     $curUser = auth()->user();
//     return view('my-profile', [
//         'userName' => $curUser->username,
//         'posts' => $curUser->posts,
//     ]);
// });

Route::get('/profile', [UserController::class, 'showCurrentUserProfile']);

require __DIR__.'/auth.php';