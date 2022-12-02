<?php

use Illuminate\Auth\Events\Login;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use App\Ingreso;
use App\User;
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
    return view('login');
});

Route::post('validar', 'LoginController@validar');

Route::middleware(['auth'])->group(function () {

    Route::get('inicio','HomeController@index');

});
Route::get('user/{id}', function ($codigo) {
     $User =  User::where('codigo', $codigo)->first();
     return new UserCollection(Ingreso::where('codigo', $User->codigo)->get());
});

Route::get('logout','LoginController@logout');
