@extends('plantilla')
@section('cuerpo')
    <form action="" method="post">
        <div class="row">
            <div class="col s3 m3 l3">
                <p></p>
                <img src="<?= asset('img/'.$categoria.'/'.$art->imagen.''); ?>" width="300">
            </div>
            <div class="col">
                <input type="text" name="id" id="" value="{{$art->id}}" hidden>
                <p><b>{{$art->nombre}}</b></p>
                <p>Precio: {{$art->precio}}</p>
                <p>{{$art->descripcion}}</p>
                <div class="row">
                    <div class="col"><p>Cantidad:</p></div>
                    <div class="col s1 m1 l1">
                        <input type="text" name="cantidad" id="" placeholder="1">
                    </div>
                    <div class="col">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Anadir al carrito
                            <i class="material-icons right">send</i>
                          </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection