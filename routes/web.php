<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

// FRONT ROUTES
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    $posts = Post::simplePaginate(3);
    return view('about')->with("posts", $posts);
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    // $posts = Post::orderBy('created_at','desc')->simplePaginate(3);
    // $posts = DB::table('posts')->where('approuve', 1)->orderBy('created_at','desc')->simplePaginate(3);
    $posts = DB::table('posts')->where('approuve', 1)->simplePaginate(2);
    // $user_name = auth()->user()->name;
    return view('bloglist')->with(["posts" => $posts]);
});

Route::get('/singleblog/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('singleblog');
Route::post('/contact', [App\Http\Controllers\MessageController::class, 'store'])->name('contact');

//PASSWORD ROUTES
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USERS ROUTES
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('adduser');
Route::put('/updateprofil/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateprofil');
Route::get('/allusers', [App\Http\Controllers\UsersController::class, 'index'])->name('allusers');
Route::delete('/deleteuser/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('delete');

// POST ROUTES
Route::get('/addpost', [App\Http\Controllers\PostController::class, 'index'])->name('addpost');
Route::post('/newpost', [App\Http\Controllers\PostController::class, 'store'])->name('newpost');
Route::get('/allposts', [App\Http\Controllers\PostController::class, 'create'])->name('allposts');
Route::delete('/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('delete');
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('editpost');
Route::put('/updatepost/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('updatepost');

Route::get('posts/approuve/{id}', 
    [App\Http\Controllers\PostController::class, 'approuve']
)->name('posts.approuve');

Route::get('posts/unapprouve/{id}', 
    [App\Http\Controllers\PostController::class, 'unapprouve']
)->name('posts.unapprouve');


// MESSAGES ROUTES
Route::get('/messages', [App\Http\Controllers\MessageController::class, 'index'])->name('messages');
Route::get('/message/{id}/', [App\Http\Controllers\MessageController::class, 'show'])->name('showmessage');
Route::delete('/delmessage/{id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('delmessage');

//ADMIN ROUTES
Route::get('users/admin/{id}', 
    [App\Http\Controllers\UsersController::class, 'admin']
)->name('users.admin');

Route::get('users/not-admin/{id}', 
    [App\Http\Controllers\UsersController::class, 'not_admin']
)->name('users.not.admin');



