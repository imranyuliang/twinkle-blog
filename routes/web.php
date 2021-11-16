<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AdminController;


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
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//Blog Controller
Route::get('blogs/create', [App\Http\Controllers\BlogsController::class, 'create'])->name('blogs.create');
Route::post('blogs/store', [App\Http\Controllers\BlogsController::class, 'store'])->name('blogs.store');




Route::get('blogs/{id}/edit', [App\Http\Controllers\BlogsController::class, 'edit'])->name('blogs.edit');
Route::patch('blogs/{id}/update', [App\Http\Controllers\BlogsController::class, 'update'])->name('blogs.update');
Route::delete('blogs/{id}/delete', [App\Http\Controllers\BlogsController::class, 'delete'])->name('blogs.delete');
Route::get('blogs/trash', [App\Http\Controllers\BlogsController::class, 'trash'])->name('blogs.trash');
Route::get('blogs/trash/{id}/restore', [App\Http\Controllers\BlogsController::class, 'restore'])->name('blogs.restore');
Route::delete('blogs/trasn/{id}/permanentDelete', [App\Http\Controllers\BlogsController::class, 'permanentDelete'])->name('blogs.permanentDelete');
Route::get('blogs/{id}', [App\Http\Controllers\BlogsController::class,'show'])->name('blogs.show');

//Blog showing 



//Cateogry
//Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
// Route::resource('/categories', App\Http\Controllers\CategoryController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);

//admin 
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::get('/dashboard/blogs', [App\Http\Controllers\AdminController::class, 'blogs_index'])->name('dashboard.blogs');


//User Route
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('/users/{id}', [App\Http\Controllers\UsersController::class, 'show'])->name('users.show');
Route::patch('/users/{id}/update', [App\Http\Controllers\UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}/delete', [App\Http\Controllers\UsersController::class, 'delete'])->name('users.delete');


//About Page
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/about/create',[App\Http\Controllers\AboutController::class, 'create'])->name('about.create');

// Route::get('blogs/{id}', [App\Http\Controllers\BlogsController::class, 'show'])->name('blogs.show');

Auth::routes();


