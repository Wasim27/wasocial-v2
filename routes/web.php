<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    return view('home', [
        'userCount' => User::count()
    ]);
});

Route::get('/feed', function () {
    $curUser = auth()->user();
    return view('dashboard', [
        'posts' => Post::latest('posted_at')->get(),
    ]);
})->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user:username}', function (User $user) {
    return view('userProfile', [
        'profileName' => $user->username,
        'posts' => $user->posts,
    ]);
});

Route::get('/profile', function (User $user) {
    $curUser = auth()->user();
    return view('my-profile', [
        'userName' => $curUser->username,
        'posts' => $curUser->posts,
    ]);
});

require __DIR__.'/auth.php';