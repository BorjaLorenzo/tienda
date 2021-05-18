@extends('plantilla-menu')
@section('cuerpo')
    <table class="striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Codgio</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Anuncio</th>
            </tr>
          </thead>
  
          <tbody>
            @foreach ($array as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->codigo}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->anuncio}}</td>
              </tr>
            @endforeach
          </tbody>
    </table>
@endsection