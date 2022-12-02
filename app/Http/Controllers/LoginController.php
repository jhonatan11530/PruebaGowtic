<?php

namespace App\Http\Controllers;

use App\User;
use App\Ingreso;
use App\salidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validar(Request $request)
    {
        $User =  User::where('codigo', $request->codigo)->first();
        if (Auth::loginUsingId($User->id)) {

            $sistema = new Ingreso();
            $sistema->codigo = auth()->user()->codigo;
            $sistema->save();

            return redirect()->intended('inicio');
        }
    }
    public function logout()
    {
        $salidas = new salidas();
        $salidas->codigo = auth()->user()->codigo;
        $salidas->save();

        Auth::logout();
        return redirect('/');
    }
}
