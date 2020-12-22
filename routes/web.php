<?php
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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


Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix'=>'knyga'], function () {
    Route::get('/', [BookController::class, 'index'])->name('book.index');
    Route::get('/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::get('/destroy', [BookController::class, 'destroy'])->name('book.destroy');
    Route::post('/store', [BookController::class, 'store'])->name('book.store');
    Route::post('/update', [BookController::class, 'update'])->name('book.update');
    
});

// Route::get('/knyga', function () {
//     $book = Book::find($_GET['delete']);
//     return print_r($book);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
