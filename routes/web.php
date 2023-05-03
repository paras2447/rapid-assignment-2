<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\MyController;
use App\Models\ContactModel;

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
//     return view('frontend/index');
// });

Route::get('/', [MyController::class, 'index']);

Route::get('/contact', [MyController::class, 'contact']);
Route::post('/contact', [MyController::class, 'save']);

Route::get('/about', [MyController::class, 'about']);
