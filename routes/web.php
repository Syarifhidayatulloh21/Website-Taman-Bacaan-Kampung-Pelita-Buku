<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/', function () {
    return view('frontend.beranda');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('backend/home','HomeController');
    Route::resource('/tujuan','TujuanController');
    Route::resource('/program','ProgramController');
    Route::resource('/kegiatan','KegiatanController');
    Route::resource('/jumlahkk','JumlahkkController');
    Route::resource('/tingkatekonomi','TingkatekonomiController');
    Route::resource('/kontakkami','KontakkamiController');
    Route::resource('/galeri','GaleriController');
    Route::post('/galeri/store', 'GaleriController@store');
       
});

Route::get('backend/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('login', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::resource('/','BerandaController');
Route::get('/visimisife','BerandaController@visimisi');
Route::get('/tujuanfe','BerandaController@tujuan');
Route::get('/programfe','BerandaController@program');
Route::get('/kegiatanfe','BerandaController@kegiatan');
Route::get('/jumlahkkfe','BerandaController@jumlahkk');
Route::get('/tingkatekonomife','BerandaController@tingkatekonomi');
Route::get('/galerife','BerandaController@galeri');
Route::get('/kontakkamife','BerandaController@kontakkami');




// Route::get('/', function () {
//     return view('frontend.beranda');
// });

// Route::get('/visimisife', function () {
//     return view('frontend.visimisi');
// });

// Route::get('/tujuanfe', function () {
//     return view('frontend.tujuan');
// });

// Route::get('/programfe', function () {
//     return view('frontend.program');
// });

// Route::get('/kegiatanfe', function () {
//     return view('frontend.kegiatan');
// });

// Route::get('/jumlahkkfe', function () {
//     return view('frontend.jumlahkk');
// });

// Route::get('/tingkatekonomife', function () {
//     return view('frontend.tingkatekonomi');
// });

// Route::get('/galerife', function () {
//     return view('frontend.galeri');
// });

// Route::get('/kontakkamife', function () {
//     return view('frontend.kontakkami');
// });