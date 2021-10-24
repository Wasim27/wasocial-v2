<?php

use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard', [
        'posts' => Post::latest('posted_at')->get()
    ]);
})->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user}', function (User $user) {
    // dd($user);
    return view('dashboard', [
        'posts' => $user->posts
    ]);
});

require __DIR__.'/auth.php';