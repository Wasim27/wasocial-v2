<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostLikesController;
use App\Http\Controllers\UsersSearchController;
use App\Http\Controllers\LoginSecurityController;

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

Route::group(['middleware' => ['auth', '2fa']], function() {
  Route::resource('/feed', PostController::class);
});

Route::get('/profile/{user:username}', [UserController::class, 'showUserProfile']);

Route::resource('/profile', UserController::class);
Route::post('/profile/{user:name}/follow', [FollowController::class, 'store']);

Route::post('/posts/{post}/like', [PostLikesController::class, 'store']);
Route::delete('/posts/{post}/like', [PostLikesController::class, 'destroy']);

Route::get('/users', [UserController::class, 'showAllUsers']);
Route::get('/search', [UserController::class, 'search']);

Route::group(['prefix'=>'2fa'], function(){
  Route::get('/',[LoginSecurityController::class, 'show2faForm']);
  Route::post('/generateSecret',[LoginSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
  Route::post('/enable2fa',[LoginSecurityController::class, 'enable2fa'])->name('enable2fa');
  Route::post('/disable2fa',[LoginSecurityController::class, 'disable2fa'])->name('disable2fa');

  Route::post('/2faVerify', function () {
      return redirect('/feed');
  })->name('2faVerify')->middleware('2fa');
});

Route::get('/test_middleware', function () {
  return "2FA middleware work!";
})->middleware(['auth', '2fa']);

require __DIR__.'/auth.php';