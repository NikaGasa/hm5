<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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


Route::get('/', [PostsController::class, 'show'])->name('main');
Route::get('/{post}', [PostsController::class, 'showPost'])->name('showPost');
Route::get("/posts", [PostsController::class, "GetPost"]);


Route::domain('admin.localhost')->group( function () {
    Route::get('/', [CommentsController::class, 'show'])->name('admin');
    Route::post('/', [CommentsController::class, 'createPost']);
    Route::get('/{post}',[CommentsController::class, 'ShowAdminPost'])->name('adminpost');
});