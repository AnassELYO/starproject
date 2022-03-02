<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StarController as AdminStarController;
use App\Http\Controllers\StarController;


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

Route::get('/', [StarController::class,"allStars"])->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* Admin  */ 
Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::resource('star', AdminStarController::class)->shallow();
});


require __DIR__.'/auth.php';
