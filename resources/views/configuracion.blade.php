@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-s3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/ajustes.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Eliminar Cuenta</h5>
                      <p class="card-text">Desea eliminar su cuenta de usuario?</p>
                      <a href="{{url('confirmarEliminar')}}" class="btn btn-primary">Eliminar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/registro.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Modificar Datos</h5>
                      <p class="card-text">Modifica los datos de la cuenta</p>
                      <a href="{{url('showModificar')}}" class="btn btn-primary">Modificar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection