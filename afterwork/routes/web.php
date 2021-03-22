<?php

use App\Http\Controllers\inscriptioncontroleur;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('connexion', function () {
    return view('connexion');
});
Route::get('reserver', function () {
    return view('reserver');
});
Route::get('annonce', function () {
    return view('annonce');
});
Route::get('adminpage', function () {
    return view('adminpage');
});
//Routes faisant appel aux fonction des controllers
Route::post('register', [inscriptioncontroleur::class, 'register']);
//Route::get('login', [inscriptioncontroleur::class, 'login']);
//Route::post('create', [inscriptioncontroleur::class, 'create'])->name('create');
Route::post('connexion', [inscriptioncontroleur::class, 'connexion'])->name('connexion');
