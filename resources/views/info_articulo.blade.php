@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('addArticulo')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-4">
                    <img src="<?= asset('img/'.$art->imagen.''); ?>" width="300">
                </div>
                <div class="col">
                    <input type="text" name="id" id="" value="{{$art->id}}" hidden>
                    <p><b>{{$art->nombre}}</b>
                        <?php if($art->descuento>0){ ?>  
                            <u>Descuento -> {{$art->descuento}}%</u>
                        <?php } ?> 
                    </p>
                    <p>Precio: {{round($art->precio-($art->precio*$art->descuento/100),2)}}€
                        <?php if($art->descuento>0){ ?>  
                        <del>{{$art->precio}}€</del>
                        <?php } ?>
                    </p>
                    <p>{{$art->descripcion}}</p>
                    <div class="row">
                        <div class="col"><p>Cantidad:</p></div>
                        <div class="col s1 m1 l1">
                            <input type="number" name="cantidad" id="" placeholder="1">
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Anadir al carrito
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection