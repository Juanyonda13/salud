<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

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
//     return view('paciente/index');
// });
Route::resource('/paciente',PacienteController::class);
Route::resource('/verPaciente/{id}',PacienteController::class);
Route::resource('/eliminarPaciente/{id}',PacienteController::class);



Route::resource('user', UserController::class);