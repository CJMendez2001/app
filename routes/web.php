<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\RetiroController;
use App\Models\Afiliado;
use App\Models\Deposito;

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

route::get('/afiliado/{empleado}', [AfiliadoController::class, 'index']);
route::get('/deposito/{empleado}/{afiliado}/{nombre}', [DepositoController::class, 'index']);
route::get('/retiro/{empleado}/{afiliado}/{nombre}', [RetiroController::class, 'index']);
route::get('/deposito/create/{empleado}/{afiliado}/{nombre}', [DepositoController::class, 'create']);
route::get('/retiro/create/{empleado}/{afiliado}/{nombre}', [RetiroController::class, 'create']);


route::get('/afiliado/create/{empleado}', [AfiliadoController::class, 'create']);
route::get('/afiliado/edit/{empleado}', [AfiliadoController::class, 'edit']);








Route::resource('/empleado','App\Http\Controllers\EmpleadoController');
Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');
Route::resource('/deposito','App\Http\Controllers\DepositoController');
Route::resource('/retiro','App\Http\Controllers\RetiroController');
Route::resource('/transaccion','App\Http\Controllers\TransaccionController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
