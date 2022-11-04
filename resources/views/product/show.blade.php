@extends ('templates.master')

@section ('productos')
<div class="container-fluid pt-4 pb-4 content-center">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset($product->imgUrl) }}" class="w-100" alt="ProductImage">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0"> {{$product->name}}</h2>
                    <h5 class="mb-0"> Marca: {{$product->Company->name}}</h5><br>
                    <h5 class="mb-0"><u> Descripción</u></h5>
                    <p class="mb-0"> {{$product->description}}</p><br>
                    @if ($product->discountStart_at <= date('Y-m-d H:i:s') && $product->discountEnd_at >= date('Y-m-d H:i:s'))
                    <label class="me-3"><b>Precio:</b> {{$product->price}} €<span class="badge badge-pill bg-danger ms-2 align-middle">{{ $product->discountPercent }} %</span></label><br>
                    @else
                    <label class="me-3"><b>Precio:</b> {{$product->price}} €
                    @endif
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection