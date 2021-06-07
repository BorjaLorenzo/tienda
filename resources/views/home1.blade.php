@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <div class="row">
            <div class="col">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id">
                    </div>
                    <div class="form-group">
                        <label for="name">NOMBRE</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="price">PRECIO</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="form-group">
                        <label for="quantity">CANTIDAD</label>
                        <input type="text" name="quantity" class="form-control" id="quantity">
                    </div>
                    <div class="form-group">
                        <label for="color">COLOR</label>
                        <select class="form-control" name="color" id="color">
                            <option value="blanco">blanco</option>
                            <option value="azul"> azul</option>
                        </select>
                        <small class="form-text text-muted">Atributo</small>
                    </div>
   
                    <div class="form-group">
                        <label for="tamano">TAMAÑO</label>
                        <select name="tamano" class="form-control" id="tamano">
                            <option value="chico">Chico</option>
                            <option value="grande">Grande</option>
                        </select>
                        <small class="form-text text-muted">Atributo</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                </form>
            </div>
        </div> --}}
        <div class="row">
            @if (!Cart::isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Accion</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="row">
                                <form method="POST" action="{{url('eliminarCarrito')}}">
                                {{-- @method('DELETE') --}}
                                @csrf
                                <button type="submit">Eliminar</button>
                            </form>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::getContent() as $item)
                        <tr>
                            <th scope="row">
                                <button>Eliminar</button>
                            </th>

                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
<div class="row"><table class="table">
    <thead>
              <tr>
                  <th sc ope="col">Articulos</th>
                  <th sc ope="col">Sub total</th>
                  <th scope="col">Total</th>
               </tr>
    </thead>
    <tbody>
                <tr>
                    <th scope="row">{{Cart::getTotalQuantity()}}</th>
                    <th scope="row">{{Cart::getSubTotal()}}</th>
                    <th scope="row">{{Cart::getTotal()}}</th>
                 </tr>
    </tbody>
</table>
</div>
        </div>
    </div>
@endsection