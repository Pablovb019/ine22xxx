@extends ('templates.master')

@section ('carrito')
<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            @foreach($cart->htItem as $item)
            <div class="row product_data">
                <div class="col-md-2">
                    <img src="{{ asset($item['imgUrl']) }}" height="80px" width="80px" alt="Imagen aquí">
                </div>
                <div class="col-md-3 my-auto">
                    <h6>{{$item['name']}}</h6>
                </div>
                <div class="col-md-2 my-auto">
                    <h6>{{$item['price']}}€</h6>
                </div>
                <div class="col-md-3 my-auto">
                    <label for="quantity">Cantidad</label>
                    <div class="input-group text-center mb-3" style="width:130px;">
                        <a class="input-group-text decrement-btn" type="button" style="text-decoration:none;" href="{{ route('cart.operation', [ 'operation' => 'remove', 'product' => $item['id']]) }}">-</a>
                        <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item['quantity']}}">
                        <a class="input-group-text increment-btn" type="button" style="text-decoration:none;" href="{{ route('cart.operation', [ 'operation' => 'add', 'product' => $item['id']]) }}">+</a>
                    </div>
                </div>
                <div class="col-md-2 my-auto">
                    <a class="btn btn-danger delete-cart-item" type="button" style="text-decoration:none;" href="{{ route('cart.operation', [ 'operation' => 'removeAll', 'product' => $item['id']]) }}"><i class="fa fa-trash"></i> Eliminar</a>
                </div>
            </div>
            @endforeach
            <div class="card-footer">
                <h6> Cantidad Total : {{ $cart->iTotalItems }} </h6>
                <h6> Precio Total : {{ $cart->dTotalPrice }}€ </h6>
            </div>
        </div>
    </div>
</div>
@endsection