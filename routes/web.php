<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autenticacao;

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
    return view('welcome');
});

Route::post('user',[Autenticacao::class,'userLogin']);

Route::view('login', 'layouts/login');

Route::view('home', 'pages/home');

Route::view('registraratendimentos', 'pages/registerservice');

Route::view('registrartipos', 'pages/registerservicestypes');

Route::view('registrartecnico', 'pages/registertechnician');

Route::view('atendimento', 'pages/myservices');

Route::view('relatorios', 'pages/report');

Route::view('tiposdeatendimento', 'pages/services');

Route::view('tecnicos', 'pages/technicians');
