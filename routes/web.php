<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
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

require __DIR__.'/auth.php';

// home should show some random public events, describe the site, big hero, and a footer
// Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/', function () {
    return view('welcome');
});

// these actions can ONLY be performed if logged in
Route::middleware('auth')->group(function () {
    Route::get('account', [UserController::class, 'index'])->name('account');
    Route::post('update_account', [UserController::class, 'update_account'])->name('update_account');
    Route::post('change_password', [UserController::class, 'change_password'])->name('change_password');
    Route::delete('delete_account', [UserController::class, 'delete_account'])->name('delete_account');

    // dashboard should show last 5 recently created plans AND plans you are allowed to see from friends in the next 14 days
    Route::get('dashboard', [PlanController::class, 'dashboard'])->name('dashboard');

    // Note: a plan is only viewable if it is public or if the user was invited or if the user is a friend (but only if it's not invite only)
    Route::resource('plans', PlanController::class);

    // Shows plans that were attended so they can be rated.  Users can get points based on how high their plans are rated
    Route::get('attended', [PlanController::class, 'attended'])->name('attended');

    // user profiles are only viewable if public or if the user viewing is a friend
    Route::get('user/{id}', [PublicController::class, 'user'])->name('user');

    Route::get('friends', [FriendController::class, 'index'])->name('friends');
    Route::get('friend-request', [FriendController::class, 'request'])->name('friend-request');
    Route::get('friend-requests', [FriendController::class, 'requests'])->name('friend-requests');

    Route::get('messages', [MessageController::class, 'index'])->name('messages');
    Route::get('message/{id}', [MessageController::class, 'show'])->name('message');
    Route::delete('message/{id}', [MessageController::class, 'destroy']);
});
