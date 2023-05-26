<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanController;






//Route
//Controller
//View

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route ::get('/halaman1',[HalamanController::class,'index']);
Route ::get('/halaman2',[HalamanController::class,'halaman2']);
Route ::get('/selamatDatang',[HalamanController::class,'welcome']);
Route ::get('/tugas1',[TugasController::class,'tugas']);

Route ::get('/tampil',[ArticleController::class,'index']);

Route ::get('/tambah_data',[ArticleController::class,'tambah_data']);
Route ::post('/tambah_data',[ArticleController::class,'input_data']);
Route ::get('/tampil_data',[ArticleController::class,'tampil_data']);
Route ::get('/hapus_data/{id}',[ArticleController::class,'hapus_data']);
Route ::get('/edit_data/{id}',[ArticleController::class,'edit_data']);
Route ::post('/edit_data/{id}',[ArticleController::class,'update_data']);

Route ::get('/tambah_siswi',[TaskController::class,'tambah_siswi']);
Route ::post('/tambah_siswi',[TaskController::class,'input_siswi']);
Route ::get('/tampil_siswi',[TaskController::class,'tampil_siswi']);
Route ::get('/hapus_siswi/{id}',[TaskController::class,'hapus_siswi']);
Route ::get('/edit_siswi/{id}',[TaskController::class,'edit_siswi']);
Route ::post('/edit_siswi/{id}',[TaskController::class,'update_siswi']);






Route::get('/artikel', [ArticleController::class,'index']);
Route::get('/artikel/{slug}', [ArticleController::class,'show']);

Route::get('/createdata', [ArticleController::class, 'createUsers']);



   

