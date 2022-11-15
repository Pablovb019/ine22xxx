@extends ('templates.master')

@section ('carrito')
<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Mi Carrito</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Nombre</th>
                        <th scope="col" class="text-center">Precio Por Unidad</th>
                        <th scope="col" class="text-center">Cantidad</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart->htItem as $item)
                    <tr>
                        <div class="col-mx-2">
                            <td>
                                <div class="col-mx-auto">
                                    <img src="{{ asset($item['imgUrl']) }}" height="80px" width="80px" alt="Imagen aquí">
                                </div>
                            </td>
                            <td>
                                <div class="col-mx-auto my-auto">
                                    <h6 class="text-center">{{$item['name']}}</h6>
                                </div>
                            </td>
                            <td>
                            <div class="col-mx-auto my-auto">
                                    <h6 class="text-center">{{$item['price']}}€</h6>
                                </div>
                            </td>
                            <td>
                                <div class="col-mx-auto my-auto">
                                    <div class="input-group text-center mb-3" style="width:130px;">
                                        <a class="input-group-text decrement-btn" type="button" style="text-decoration:none;" href="{{ route('cart.operation', [ 'operation' => 'remove', 'product' => $item['id']]) }}">-</a>
                                        <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item['quantity']}}">
                                        <a class="input-group-text increment-btn" type="button" style="text-decoration:none;" href="{{ route('cart.operation', [ 'operation' => 'add', 'product' => $item['id']]) }}">+</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-auto my-auto">
                                    <a class="btn btn-danger delete-cart-item" type="button" style="text-decoration:none;" href="{{ route('cart.operation', [ 'operation' => 'removeAll', 'product' => $item['id']]) }}"><i class="fa fa-trash"></i> Eliminar</a>
                                </div>
                            </td>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="card-footer">
                <h6> Cantidad Total : {{ $cart->iTotalItems }} </h6>
                <h6> Precio Total : {{ $cart->dTotalPrice }}€ </h6>
            </div>

        </div>
    </div>
</div>
@endsection