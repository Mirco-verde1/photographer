<?php

use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Photos\PhotosController;

use App\Http\Controllers\Controller;

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


Route::get('/', function () {
    return view('home.index');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['namespace' => 'pannello-amministratore', 'as' =>'admin.'], function (){

  Route::group(['prefix' => 'pannello-amministratore'], function (){
        //ADMIN ROUTES
        Route::get('/home', [AdministratorController::class, 'index'])->middleware(['auth'])->name('home');

        //PHOTOS ROUTES
        Route::get('/aggiunta-foto', [PhotosController::class, 'create'])->middleware(['auth'])->name('add-photo');

        //CATEGORIES ROUTES
        Route::get('/aggiunta-categoria', [CategoriesController::class, 'create'])->middleware(['auth'])->name('add-category');
        });
 });




