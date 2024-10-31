<?php
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UsiaPensiunController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('layouts.admin.dashboard');

Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('admin.master.pendidikan.index');
Route::get('/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
Route::post('/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::put('/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::delete('/pendidikan/delete/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

Route::get('/jabatan', [JabatanController::class, 'index'])->name('admin.master.jabatan.index');
Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
Route::put('/jabatan/update/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
Route::delete('/jabatan/delete/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('admin.master.pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

Route::get('/usia-pensiun', [UsiaPensiunController::class, 'index'])->name('admin.usia pensiun.index');
Route::get('/usia-pensiun/create', [UsiaPensiunController::class, 'create'])->name('usia pensiun.create');
Route::post('/usia-pensiun/store', [UsiaPensiunController::class, 'store'])->name('usia pensiun.store');
Route::get('/usia-pensiun/edit/{id}', [UsiaPensiunController::class, 'edit'])->name('usia pensiun.edit');
Route::put('/usia-pensiun/update/{id}', [UsiaPensiunController::class, 'update'])->name('usia pensiun.update');
Route::delete('/usia-pensiun/delete/{id}', [UsiaPensiunController::class, 'destroy'])->name('usia pensiun.destroy');

