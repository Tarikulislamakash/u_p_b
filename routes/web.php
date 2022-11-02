<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [ProjectController::class, 'home'])->name('home');
Route::get('/about', [ProjectController::class, 'about'])->name('about');
Route::get('/bookkeeping', [ProjectController::class, 'bookkeeping'])->name('bookkeeping');
Route::get('/cis', [ProjectController::class, 'cis'])->name('cis');
Route::get('/contact', [ProjectController::class, 'contact'])->name('contact');
Route::get('/my-account', [ProjectController::class, 'my_account'])->name('login');
Route::get('/payment', [ProjectController::class, 'payment'])->name('payment');
Route::get('/register', [ProjectController::class, 'register'])->name('register');
Route::get('/self', [ProjectController::class, 'self'])->name('self');
Route::get('/thank-you', [ProjectController::class, 'thank_you'])->name('thank-you');
Route::get('/utr', [ProjectController::class, 'utr'])->name('utr');
Route::get('/vat-filing', [ProjectController::class, 'vat_filing'])->name('vat-filing');
Route::post('/appointment', [ProjectController::class, 'appointment'])->name('appointment');

require __DIR__ . '/auth.php';
