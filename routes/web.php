<?php

use App\Http\Controllers\Mycontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Mycontroller::class, 'homepage'])->name('homepage');
Route::get('/lavora_con_noi',[Mycontroller::class, 'lavoraConNoi'])->name('lavora');
Route::post('/lavora_con_noi/submit',[Mycontroller::class, 'submit'])->name('submit');