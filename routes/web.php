<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Operator\ReportBukuController;
use Illuminate\Routing\RouteGroup;

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
    return view('dashboard');
});


Route::get('/data-pengarang','\App\Http\Controllers\PengarangController@index')->name('data-pengarang');

//Route Kategori

Route::get('/create-kategori','\App\Http\Controllers\KategoriController@create')->name('create-kategori');
Route::post('/save-kategori','\App\Http\Controllers\KategoriController@store')->name('save-kategori');
Route::get('/edit-kategori/{id}','\App\Http\Controllers\KategoriController@edit')->name('edit-kategori');
Route::post('/update-kategori/{id}','\App\Http\Controllers\KategoriController@update')->name('update-kategori');
Route::get('/delete-kategori/{id}','\App\Http\Controllers\KategoriController@destroy')->name('delete-kategori');


// Route Penerbit

Route::get('/create-penerbit','\App\Http\Controllers\PenerbitController@create')->name('create-penerbit');
Route::post('/save-penerbit','\App\Http\Controllers\PenerbitController@store')->name('save-penerbit');
Route::get('/edit-penerbit/{id}','\App\Http\Controllers\PenerbitController@edit')->name('edit-penerbit');
Route::post('/update-penerbit/{id}','\App\Http\Controllers\PenerbitController@update')->name('update-penerbit');
Route::get('/delete-penerbit/{id}','\App\Http\Controllers\PenerbitController@destroy')->name('delete-penerbit');


// Route Pengarang
Route::get('/pengarang','\App\Http\Controllers\PengarangController@index')->name('pengarang');
Route::get('/create-pengarang','\App\Http\Controllers\PengarangController@create')->name('create-pengarang');
Route::post('/save-pengarang','\App\Http\Controllers\PengarangController@store')->name('save-pengarang');
Route::get('/edit-pengarang/{id}','\App\Http\Controllers\PengarangController@edit')->name('edit-pengarang');
Route::post('/update-pengarang/{id}','\App\Http\Controllers\PengarangController@update')->name('update-pengarang');
Route::get('/delete-pengarang/{id}','\App\Http\Controllers\PengarangController@destroy')->name('delete-pengarang');

// Route Anggota

Route::get('/create-anggota','\App\Http\Controllers\AnggotaController@create')->name('create-anggota');
Route::post('/save-anggota','\App\Http\Controllers\AnggotaController@store')->name('save-anggota');
Route::get('/edit-anggota/{id}','\App\Http\Controllers\AnggotaController@edit')->name('edit-anggota');
Route::post('/update-anggota/{id}','\App\Http\Controllers\AnggotaController@update')->name('update-anggota');
Route::get('/delete-anggota/{id}','\App\Http\Controllers\AnggotaController@destroy')->name('delete-anggota');

// Route status
Route::get('/status','\App\Http\Controllers\StatusController@index')->name('status');
Route::get('/create-status','\App\Http\Controllers\StatusController@create')->name('create-status');
Route::post('/save-status','\App\Http\Controllers\StatusController@store')->name('save-status');
Route::get('/edit-status/{id}','\App\Http\Controllers\StatusController@edit')->name('edit-status');
Route::post('/update-status/{id}','\App\Http\Controllers\StatusController@update')->name('update-status');
Route::get('/delete-status/{id}','\App\Http\Controllers\StatusController@destroy')->name('delete-status');

// Route denda

Route::get('/create-denda','\App\Http\Controllers\DendaController@create')->name('create-denda');
Route::post('/save-denda','\App\Http\Controllers\DendaController@store')->name('save-denda');
Route::get('/edit-denda/{id}','\App\Http\Controllers\DendaController@edit')->name('edit-denda');
Route::post('/update-denda/{id}','\App\Http\Controllers\DendaController@update')->name('update-denda');
Route::get('/delete-denda/{id}','\App\Http\Controllers\DendaController@destroy')->name('delete-denda');

// Route anggota

Route::get('/create-anggota','\App\Http\Controllers\AnggotaController@create')->name('create-anggota');
Route::post('/save-anggota','\App\Http\Controllers\AnggotaController@store')->name('save-anggota');
Route::get('/edit-anggota/{id}','\App\Http\Controllers\AnggotaController@edit')->name('edit-anggota');
Route::post('/update-anggota/{id}','\App\Http\Controllers\AnggotaController@update')->name('update-anggota');
Route::get('/delete-anggota/{id}','\App\Http\Controllers\AnggotaController@destroy')->name('delete-anggota');

// Route data_buku

Route::get('/create-buku','\App\Http\Controllers\BukuController@create')->name('create-buku');
Route::post('/save-buku','\App\Http\Controllers\BukuController@store')->name('save-buku');
Route::get('/edit-buku/{id}','\App\Http\Controllers\BukuController@edit')->name('edit-buku');
Route::post('/update-buku/{id}','\App\Http\Controllers\BukuController@update')->name('update-buku');
Route::get('/delete-buku/{id}','\App\Http\Controllers\BukuController@destroy')->name('delete-buku');



// Route data_inventaris

Route::get('/create-inventaris','\App\Http\Controllers\InventarisController@create')->name('create-inventaris');
Route::post('/save-inventaris','\App\Http\Controllers\InventarisController@store')->name('save-inventaris');
Route::get('/edit-inventaris/{id}','\App\Http\Controllers\InventarisController@edit')->name('edit-inventaris');
Route::post('/update-inventaris/{id}','\App\Http\Controllers\InventarisController@update')->name('update-inventaris');
Route::get('/delete-inventaris/{id}','\App\Http\Controllers\InventarisController@destroy')->name('delete-inventaris');



Route::get('/data-pengguna',[LoginController::class,'index' ])->name('data-pengguna');
Route::get('/create-user',[LoginController::class,'create_user' ])->name('create-user');
Route::post('/save-user',[LoginController::class,'store_user' ])->name('save-user');
Route::get('/delete-user/{id}',[LoginController::class,'destroy_user' ])->name('delete-user');
Route::get('/edit-user/{id}',[LoginController::class,'edit_user' ])->name('edit-user');
Route::post('/update-user/{id}',[LoginController::class,'update_user' ])->name('update-user');

// Route Auth
route::get('/login',[LoginController::class,'login' ])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin' ])->name('postlogin');
Route::get('/postlogout',[LoginController::class,'postlogout' ])->name('postlogout');

// Route Peminjam
Route::get('/create-peminjam','\App\Http\Controllers\PeminjamanController@create')->name('create-peminjam');
Route::post('/save-peminjam','\App\Http\Controllers\PeminjamanController@store')->name('save-peminjam');
Route::get('/edit-peminjam/{id}','\App\Http\Controllers\PeminjamanController@edit')->name('edit-peminjam');
Route::get('/update-peminjam/{id}','\App\Http\Controllers\PeminjamanController@update')->name('update-peminjam');
Route::get('/delete-peminjam/{id}','\App\Http\Controllers\PeminjamanController@destroy')->name('delete-peminjam');

Route::get('/update-status-buku/{id}','\App\Http\Controllers\PeminjamanController@updateStatus')->name('update-status-buku');


Route::get('/detail-peminjam/{id}','\App\Http\Controllers\PeminjamanController@edit')->name('detail-peminjam');
Route::post('/update-peminjam/{id}','\App\Http\Controllers\PeminjamanController@update')->name('update-peminjam');

// Route::get('reportbuku', [ReportBukuController::class, 'index'])->name('reportbuku');
Route::get('/reportbuku','\App\Http\Controllers\ReportBukuController@index')->name('reportbuku');
Route::get('reportbuku/export_excel/{tgl1}/{tgl2}', [ReportBukuController::class, 'exportExcel'])->name('reportbuku.excel');
Route::get('reportbuku/export_pdf/{tgl1}/{tgl2}', [ReportBukuController::class, 'exportPdf'])->name('reportbuku.pdf');


Route::group(['middleware' => ['auth']], function (){
    Route::get('/inventaris','\App\Http\Controllers\InventarisController@index')->name('inventaris');
    Route::get('/kategori','\App\Http\Controllers\KategoriController@index')->name('kategori');
    Route::get('/dashboard',[DashboardController::class,'index' ])->name('dashboard');
    Route::get('/buku','\App\Http\Controllers\BukuController@index')->name('buku');
    Route::get('/anggota','\App\Http\Controllers\AnggotaController@index')->name('anggota');
    Route::get('/denda','\App\Http\Controllers\DendaController@index')->name('denda');
    Route::get('/anggota','\App\Http\Controllers\AnggotaController@index')->name('anggota');
    Route::get('/penerbit','\App\Http\Controllers\PenerbitController@index')->name('penerbit');
    Route::get('/peminjam','\App\Http\Controllers\PeminjamanController@index')->name('peminjam');
    Route::get('/pengembalian','\App\Http\Controllers\PengembalianController@index')->name('pengembalian');

    Route::get('/export',[BukuController::class, 'export'])->name('export');

});
