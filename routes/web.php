<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookController;
use App\Models\Categoty;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('Category',App\Http\Controllers\CategoryController::class);
    Route::resource('product',App\Http\Controllers\ProductController::class);
});

require __DIR__.'/auth.php';
Route::get('upload-file',[ App\Http\Controllers\UploadFileController::class, 'showForm'])->name('upload-file.showform');
Route::post('handleUpload', [App\Http\Controllers\UploadFileController::class, 'handleUpload'])->name('upload-file.handleUpload');
Route::resource('tags',TagController::class,);

Route::resource('book',App\Http\Controllers\BookController::class);

// Route::get('ahihi',function(){
//     return App\Models\Categoty::all();
// });

