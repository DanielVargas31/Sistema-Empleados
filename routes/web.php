<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpleadoController;


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
    return view('auth.login');
});

Route::get('/empleado', function () {
     return view('empleado.index');
});
// Route::get('/empleado/create', [EmpleadoController::class,'create']);
// Route::get('/empleado/listar', [EmpleadoController::class,'show']);
 Route::get('/empleado/hola', [EmpleadoController::class,'hola'])->name('hola');

Route::resource('empleado',EmpleadoController::class)->middleware('auth');

Auth::routes(['reset'=>false, ''=>false]);


Route::get('/home', [EmpleadoController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'], function () {

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

});
