<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Dashboard\DashboardArticle;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardGalery;
use App\Http\Controllers\Dashboard\DashboardUser;
use App\Http\Controllers\ProfileController;

// Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
Route::middleware(['auth'])->group(function (){
    // Route utama
    Route::get('/', [ViewController::class, 'index'])->name('welcome');
    // Route Home
    Route::get('/home',[ViewController::class, 'home'])->name('home');
    
    // profile
    Route::get('/profile/{username}', [ProfileController::class, 'index'])->name('profile');
    // profile update proses
    Route::put('/profile/update/{username}', [ProfileController::class, 'update'])->name('profile-update');
    
    // profile update image proses
    Route::put('/profile/update/image/{username}', [ProfileController::class, 'updateProfile'])->name('profile-update-image');
    Route::delete('/profile/delete/image/{username}', [ProfileController::class, 'destroyProfile'])->name('profile-destroy-image');
    
    // page article
    Route::get('/article', [ArticleController::class, 'index'])->name('article');
    Route::get('/article-destroy/{id}', [ArticleController::class, 'destroy'])->name('article-destroy');
    // page single article
    Route::get('/single-article/{title}', [ArticleController::class, 'show'])->name('article-show');
    
    // page galery
    Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
    Route::get('galery-destroy/{id}', [GaleryController::class, 'destroy'])->name('galery-destroy');
    
    // page user
    Route::get('/user', [UserController::class, 'index',])->name('user');
    
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    //user dashboard
    Route::get('/dashboard-user', [DashboardUser::class, 'index'])->name('dashboard-user');
    // user dashboard create
    Route::get('/dashboard-user-create', [DashboardUser::class, 'create'])->name('dashboard-user-create');
    Route::post('/dashboard-user-store', [DashboardUser::class, 'store'])->name('dashboard-user-store');
    // user dashboard update
    Route::get('/dashboard-user-edit/{id}', [DashboardUser::class, 'edit'])->name('dashboard-user-edit');
    Route::post('/dashboard-user-update/{user}', [DashboardUser::class, 'update'])->name('dashboard-user-update');
    // user dashboard delete
    Route::get('/dashboard-user-destroy/{id}', [DashboardUser::class, 'destroy'])->name('dashboard-user-destroy');
    
    // article dashboard
    Route::get('/dashboard-article', [DashboardArticle::class, 'index'])->name('dashboard-article');
    // article dashboard create
    Route::get('/dashboard-article-create', [DashboardArticle::class, 'create'])->name('dashboard-article-create');
    Route::post('/dashboard-article-store', [DashboardArticle::class, 'store'])->name('dashboard-article-store');
    // article dashboard update
    Route::get('/dashboard-article-edit/{id}', [DashboardArticle::class, 'edit'])->name('dashboard-article-edit');
    Route::post('/dashboard-article-update/{id}', [DashboardArticle::class, 'update'])->name('dashboard-article-update');
    // article dashboard delete
    Route::get('/dashboard-article-destroy/{id}', [DashboardArticle::class, 'destroy'])->name('dashboard-article-destroy');
    
    // galery dashboard
    Route::get('/dashboard-galery', [DashboardGalery::class, 'index'])->name('dashboard-galery');
    // galery dashboard create
    Route::get('/dashboard-galery-create', [DashboardGalery::class, 'create'])->name('dashboard-galery-create');
    Route::post('/dashboard-galery-store', [DashboardGalery::class, 'store'])->name('dashboard-galery-store');
    // galery dashboard update
    Route::get('/dashboard-galery-edit/{id}', [DashboardGalery::class, 'edit'])->name('dashboard-galery-edit');
    Route::post('/dashboard-galery-update/{galery}', [DashboardGalery::class, 'update'])->name('dashboard-galery-update');
    // galery dashboard delete
    Route::get('/dashboard-galery-destroy/{id}', [DashboardGalery::class, 'destroy'])->name('dashboard-galery-destroy');




    Route::group(['middleware' => 'admin'], function () {
        //user dashboard
        Route::get('/dashboard-user', [DashboardUser::class, 'index'])->name('dashboard-user');
        // user dashboard create
        Route::get('/dashboard-user-create', [DashboardUser::class, 'create'])->name('dashboard-user-create');
        Route::post('/dashboard-user-store', [DashboardUser::class, 'store'])->name('dashboard-user-store');
        // user dashboard update
        Route::get('/dashboard-user-edit/{id}', [DashboardUser::class, 'edit'])->name('dashboard-user-edit');
        Route::post('/dashboard-user-update/{user}', [DashboardUser::class, 'update'])->name('dashboard-user-update');
        // user dashboard delete
        Route::get('/dashboard-user-destroy/{id}', [DashboardUser::class, 'destroy'])->name('dashboard-user-destroy');
    });
    
});

// login
Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/loginProses', [LoginController::class, 'loginProses'])->name('loginProses');
    // register
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/registerProses', [LoginController::class, 'registerProses'])->name('registerProses');    
});
// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');