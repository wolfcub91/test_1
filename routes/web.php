<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CronJobController;
use App\Http\Controllers\DolciController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\VetrinaController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/cron_job', [CronJobController::class, 'aggiorna_vetrina']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);


Route::group(
    [
        'middleware' => 'auth',
        'prefix' => 'admin'
    ]
    ,
    function () {
        Route::view('/', 'admin/index')->name('index.admin');
        Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        Route::get('/aggiungi_dolce', [DolciController::class, 'aggiungi_dolce'])->name('dolce.aggiungi');
        Route::get('/elimina_dolce/{id}', [DolciController::class, 'elimina_dolce'])->where('id', '[0-9]+')->name('dolce.elimina');
        Route::post('/salva_dolce', [DolciController::class, 'salva_dolce'])->name('dolce.salva');
        Route::get('/visualizza_dolci', [DolciController::class, 'visualizza_dolci'])->name('dolci.visualizza');
        Route::get('/modifica_dolce/{id}', [DolciController::class, 'modifica_dolce'])->where('id', '[0-9]+')->name('dolce.modifica');
        Route::post('/update_dolce', [DolciController::class, 'update_dolce'])->name('dolce.update');

        Route::get('/visualizza_vetrina', [VetrinaController::class, 'visualizza_vetrina'])->name('vetrina.visualizza');
        Route::get('/aggiungi_vetrina/{id}', [VetrinaController::class, 'aggiungi_vetrina'])->where('id', '[0-9]+')->name('vetrina.aggiungi');
        Route::post('/salva_vetrina', [VetrinaController::class, 'salva_vetrina'])->name('vetrina.salva');

    }
);

//require __DIR__.'/auth.php';
