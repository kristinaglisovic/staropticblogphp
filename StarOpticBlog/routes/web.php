<?php

use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\DataRangeActivityController;
use App\Http\Controllers\Admin\ForgotPasswordUsers;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
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

//-----------------------FRONT----------------------///


//-------POCETNA
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/home', [FrontController::class, 'home'])->name('home');
//kraj


//-------BLOG  ******
Route::get('/posts', [FrontController::class, 'posts'])->name('posts');
Route::get('/posts/{post}', [FrontController::class, 'showPost'])->name('post');
//kraj


//-------AUTOR
Route::get('/author', [FrontController::class, 'author'])->name('author');
//kraj

//-------KONTAKT
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'storeMessage'])->name('contactSend');
//kraj

//------------------------AUTHENTICATION----------------------///


//-------LOGIN
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('loginUser');
//kraj
//-------REGISTRATION
Route::get('/register', [AuthController::class, 'registration'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('registerUser');
//kraj
//-------LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//kraj

//kategorije front

Route::resource('/categories',CategoryController::class);

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

//POST KOMENTARI

Route::post('/post/comment', [FrontController::class, 'commentStore'])->name('comment.store');

//comments
Route::delete('/comments/{comment}/delete', [BackendController::class, 'destroyCommentFront'])->name('comment.destroy.front');

//search



//------------------------ADMIN----------------------///
Route::group(['middleware' => 'isAdmin'], function(){
    //DASHBOARD PAGES
    Route::get('/admin', [BackendController::class, 'dashboard'])->name('admin.dash');

    Route::get('/admin/registeredUsers', [UserController::class, 'registeredUsers'])->name('admin.users.registered');
    Route::get('/admin/contactPage', [BackendController::class, 'contact'])->name('admin.contact');
    Route::get('/admin/comments', [BackendController::class, 'comments'])->name('admin.comments');
    Route::get('/admin/activity', [DataRangeActivityController::class, 'activity'])->name('admin.activity');
    Route::delete('/admin/activity/deleteAll', [DataRangeActivityController::class, 'truncateActivity'])->name('admin.activity.destroy');
    Route::post('/admin/activity/fetch_data', [DataRangeActivityController::class, 'fetch_data'])->name('datarange.fetch_data');

    //kreiraj post for
    Route::get('/post/create', [PostController::class, 'createPage'])->name('post.create');
    //stavljanje posta u bazu
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');

    //post
    //edit posta
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');

    Route::get('/posts/{post}/status', [PostController::class, 'statusUpdate'])->name('post.status');
    //edit posta -update
    Route::patch('/posts/{post}/update', [PostController::class, 'update'])->name('post.update');
    //delette posta-delete
    Route::delete('/posts/{post}/delete', [FrontController::class, 'destroy'])->name('post.delete');
    Route::delete('/posts/{post}/backDelete', [PostController::class, 'destroyPost'])->name('post.back.delete');


    //kategorije back
    Route::get('/admin/categories/createCategory', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/admin/storeCategories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    //user
    Route::get('/admin/user/create', [UserController::class, 'createAdmin'])->name('admin.create');


    Route::delete('/admin/registeredUsers/{user}/delete', [UserController::class, 'destroyUser'])->name('user.destroy');
    Route::delete('/admin/user/email-reset-activity/truncate', [UserController::class, 'truncateForgottenPass'])->name('admin.reset.destroy');
    Route::post('/admin/user/updateRole', [UserController::class, 'roleUpdate'])->name('update.role');
    //registrationAdmin
    Route::post('/admin/register-admin', [UserController::class, 'registerAdmin'])->name('registerAdmin');

    //comments
    Route::delete('/admin/comments/{comment}/delete', [BackendController::class, 'destroyCommentBack'])->name('comment.destroy');

    //messages
    Route::delete('/admin/contactPage/{m}/delete', [BackendController::class, 'destroyMessage'])->name('contact.destroy');
    Route::delete('/admin/contactPage/deleteAll', [BackendController::class, 'truncateMessages'])->name('contact.truncate');

    Route::get('/admin/user/email-reset-activity', [ForgotPasswordUsers::class, 'index'])->name('admin.users.forgotten');
    Route::get('/searchUsers', [ForgotPasswordUsers::class, 'search'])->name('search');
});

