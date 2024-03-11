<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactanos;

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

// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index')-;
//     Route::get('/cursos/create', 'create');
//     Route::get('/cursos/{curso}', 'show');
// });

// Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
// Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
// Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
// Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
// Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
// Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
// Route::delete('/curso/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

// Usar resource cuando hay muchas rutas
Route::get('/', HomeController::class)->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::resource('cursos', CursoController::class);
Route::get('/contactanos', function () {
    Mail::to('hbobv2020@gmail.com')
        ->send(new Contactanos);
    return "Mensaje enviado";
})->name('contactanos');
