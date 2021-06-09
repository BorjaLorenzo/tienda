@extends('layouts.app')
@section('content')
    <p>nombre:{{$valor->input('name')}}</p>
    <p>{{$valor->input('apellidos')}}</p>
    <p>{{$valor->input('email')}}</p>
@endsection