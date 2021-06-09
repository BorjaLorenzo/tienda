@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{url('eliminar')}}">
                    <p>Esta seguro de que desea eliminar su cuenta de usuario?</p>
                    <a type="button" class="btn btn-primary" href="{{url('ajustes')}}">No</a>
                    <button type="submit" class="btn btn-primary">Si</button>
                  </form>
            </div>
        </div>
    </div>
@endsection