<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;

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

//DOSEN
Route::get('/dosen_insert',[DosenController::class,'insert']);
Route::get('/dosen_select',[DosenController::class,'select']);
Route::get('/dosen_update',[DosenController::class,'update']);
Route::get('/dosen_delete',[DosenController::class,'delete']);

//MAHASISWA
Route::get('/mahasiswa_insert',[MahasiswaController::class,'insert']);
Route::get('/mahasiswa_select',[MahasiswaController::class,'select']);
Route::get('/mahasiswa_update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa_delete',[MahasiswaController::class,'delete']);

//MATKUL
Route::get('/matkul_insert',[MatkulController::class,'insert']);
Route::get('/matkul_select',[MatkulController::class,'select']);
Route::get('/matkul_update',[MatkulController::class,'update']);
Route::get('/matkul_delete',[MatkulController::class,'delete']);

Route::get('/', function () {
    return view('home');
});

Route::get('/dosen', function(){
    $dosen = [
        "Rini Mayasari",
        "Purwanto",
        "Susilawati Sobur",
        "Betha Nurina Sari",
        "Intan Purnamasari",
        "Iqbal Maulana",
        "Ratna Mufidah",
        "Asep Jamaludin",
        "Tesa Nur Padilah",
        "Arip Solehudin"
    ];
    return view('dosen')->with('dosen',$dosen);
});

Route::get('/mahasiswa', function(){
    $mahasiswa = [
        "Ilhan Firaldi",
        "Fauzan Arista",
        "Ilham Safaat",
        "Ray Rizky Fawzi",
        "Gilang Maulana",
        "Hanna Athaya",
        "Gidion Bagas",
        "Hagi Azzam",
        "Fanny Suyanto",
        "Ihsan Muhammad"
    ];
    return view('mahasiswa')->with('mahasiswa',$mahasiswa);
});

Route::get('/matakuliah', function(){
    $matakuliah = [
        "Pemrograman Berbasis Mobile",
        "Data Mining",
        "Technopreneur",
        "Framework Pemrograman Mobile",
        "Kalkulus",
        "Statistik & Probabilitas",
        "Aljabar Linear",
        "Bahasa Inggris",
        "Basis Data",
        "Blockchain"
    ];
    return view('matakuliah')->with('matakuliah',$matakuliah);
});
