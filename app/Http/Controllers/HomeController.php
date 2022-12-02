<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

    public function index()
    {
        $Ingreso = DB::table('users')->join('ingresos','ingresos.codigo','=','users.codigo')->select('ingresos.id','users.codigo','users.NombreCompleto','ingresos.created_at')->get();
        $salidas = DB::table('users')->join('salidas','salidas.codigo','=','users.codigo')->select('salidas.id','users.codigo','users.NombreCompleto','salidas.created_at')->get();
        return view('dashboard.index',compact('Ingreso','salidas'));
    }


}
