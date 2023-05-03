<?php
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\LamaranController;
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

Route::get ('/login', function(){
    return view('login');
})->name('login');

Route::post('/auth', [LamaranController::class, 'auth'])->name('auth');
Route::get('/', [LamaranController::class, 'index'])->name('home');
Route::post('/store', [LamaranController::class, 'store'])->name('store');

Route::middleware(['isLogin', 'CekRole:petugas'])->group(function(){
    Route::get('/data/petugas', [LamaranController::class, 'dataPetugas'])->name('data_petugas');
    Route::get('/response/edit/{lamaran_id}', [ResponseController::class, 'edit'])->name('response.edit');
    Route::patch('/response/update/{lamaran_id}', [ResponseController::class, 'update'])->name('response.update');
});

Route::middleware(['isLogin', 'CekRole:admin'])->group(function() {
    Route::get('/data', [LamaranController::class, 'data'])->name('data');
    Route::get('/export/pdf',[LamaranController::class, 'exportPDF'])->name('export-pdf');
    Route::get('/export/excel', [LamaranController::class, 'exportExcel'])->name('export.excel');
    Route::delete ('/hapus/{id}', [LamaranController::class, 'destroy'])->name('delete');
});

Route::middleware(['isLogin', 'CekRole:admin,petugas'])->group(function(){
    Route::get('/logout', [LamaranController::class, 'logout'])->name('logout');
});









