<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,HomeController,AlbumController,PhotoController,ProfilController};


Route::redirect('/', '/auth/login');

Route::controller(AuthController::class)->group(function(){
    Route::get('auth/login', 'showLoginForm')->name('login')->middleware('guest');
    Route::post('auth/postLogin', 'postLogin')->name('postLogin');
    Route::post('logout', 'logout')->name('logout');
    Route::get('auth/register', 'showRegistrationForm')->name('register.form');
    Route::post('auth/register', 'register')->name('register');
    
});


Route::middleware('auth')->group(function() {
    Route::get('home', [HomeController::class,'index'])->name('home');
    
    Route::resource('albums', AlbumController::class);

    Route::resource('photos', PhotoController::class);
    Route::get('/albums/{album}/photos', [PhotoController::class,'index'])
    ->name('albums.photos');
    Route::post('photos/{photo}/like/', [PhotoController::class,'like'])
    ->name('photos.like');
    Route::get('/photos/{photo}/comments', [PhotoController::class,'showComments'])
    ->name('photos.comments');
    Route::post('/photos/{photo}/comments', [PhotoController::class,'storeComment'])
    ->name('photos.comment.store');


    Route::get('profile', [ProfilController::class,'index'])
    ->name('profile');
    Route::put('profile', [ProfilController::class,'update'])
    ->name('profile.update');
    
    

    
    
});