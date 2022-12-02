@extends('layout')
@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre Empleado</th>
                <th scope="col">Fecha Ingreso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Ingreso as $Ingreso)
            <tr>
                <th>{{$Ingreso->id}}</th>
                <td>{{$Ingreso->codigo}}</td>
                <td>{{$Ingreso->NombreCompleto}}</td>
                <td>{{$Ingreso->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre Empleado</th>
                <th scope="col">Fecha Ingreso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salidas as $salidas)
            <tr>
                <th>{{$salidas->id}}</th>
                <td>{{$salidas->codigo}}</td>
                <td>{{$salidas->NombreCompleto}}</td>
                <td>{{$salidas->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('logout') }}" class="btn btn-primary">Salir</a>
@endsection
