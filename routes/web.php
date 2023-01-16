<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('client.accueil');
});


// Route::group(['middleware' => ['admin']], function () {
//     Route::get('admin', 'HomeController@admin')->name('admin');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//route

Route::get('/', function () {
    return view('client.accueil');
});
Route::get("accueil", [AccueilController::class, "index"])->name('client.accueil');

Route::get("form", [FormController::class, 'indexe'])->name('client.form');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');

Route::get("admin.detail", [FormController::class, "detailForm"])->name("admin.detail");
Route::get("admin.plus/{id}", [FormController::class, "detail"])->name("admin.plus");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');