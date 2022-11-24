@extends ('templates.master')

@section ('ofertas')
<div class="container-fluid pt-4 pb-4">
  <h2>Ofertas del día</h2>
  <div class="row pt-2">
    @foreach ($aProduct_offering as $oProduct)
    @if ($oProduct->discountStart_at <= date('Y-m-d H:i:s') && $oProduct->discountEnd_at >= date('Y-m-d H:i:s'))
      <div class="col-md-4 mb-3">
        <div class="card">
          <a href="product/{{ $oProduct->id }}">
            <img src="{{ asset($oProduct->imgUrl) }}" class="w-100" alt="ProductImage">
            <div class="card-body">
              <h5>{{ $oProduct->name }}</h5>
              <span class="float-start">{{ $oProduct->price }}€</span>
              <span class="badge bg-danger ms-3 align-middle">{{ $oProduct->discountPercent }}%</span>
            </div>
          </a>
        </div>
      </div>
      @endif
      @endforeach
  </div>
</div>
@endsection

@section('nuevos')
<div class="container-fluid pt-4 pb-4">
  <h2>Nuevos productos</h2>
  <div class="row pt-2">
    @foreach ($aProduct_new as $oProduct)
    @if (date('Y-m-d', strtotime($oProduct->updated_at)) >= date('Y-m-d') && date('Y-m-d', strtotime($oProduct->updated_at)) <= date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 week' ))) @if ($oProduct->HasDiscount())
      <div class="col-md-4 mb-3">
        <div class="card">
          <a href="product/{{ $oProduct->id }}">
            <img src="{{ asset($oProduct->imgUrl) }}" class="w-100" alt="ProductImage">
            <div class="card-body">
              <h5>{{ $oProduct->name }}</h5>
              <span class="float-start">{{ $oProduct->price }}€</span>
              <span class="badge bg-danger ms-3 align-middle">{{ $oProduct->discountPercent }}%</span>
              <br>
            </div>
          </a>
        </div>
      </div>
      @else
      <div class="col-md-4 mb-3">
        <div class="card">
          <a href="#">
            <img src="{{ asset($oProduct->imgUrl) }}" class="w-100" alt="ProductImage">
            <div class="card-body">
              <h5>{{ $oProduct->name }}</h5>
              <span class="float-start">{{ $oProduct->price }}€</span>
              <br>
            </div>
          </a>
        </div>
      </div>
      @endif
      @endif
      @endforeach
  </div>
</div>
@endsection

@section('destacados')
<div class="container-fluid pt-4 pb-4">
  <h2>Lo más vendido</h2>
  <div class="col-md-auto">
    <h5>1.<a href="/product/2"><img src="{{ asset('img/000002.png') }}" class="img-thumbnail img-fluid w-25" alt="Corsair iCUE 4000X RGB Cristal Templado USB 3.1 RGB Negro"></h5></a>
    <h5>2.<a href="/product/1"><img src="{{ asset('img/000001.png') }}" class="img-thumbnail img-fluid w-25" alt="Asus ROG Strix GeForce RTX 3090 Gaming OC 24GB GDDR6X"></h5></a>
    <h5>3.<a href="/product/5"><img src="{{ asset('img/000005.png') }}" class="img-thumbnail img-fluid w-25" alt="G.Skill Trident Z5 RGB Plata DDR5 6000MHz 32 GB 2x16GB CL40"></h5></a>
    <h5>4.<a href="/product/4"><img src="{{ asset('img/000004.png') }}" class="img-thumbnail img-fluid w-25" alt="AMD Ryzen 5 7600X sin Cooler 4.7 GHz Box"></h5></a>
    <h5>5.<a href="/product/3"><img src="{{ asset('img/000003.png') }}" class="img-thumbnail img-fluid w-25" alt="MSI GeForce RTX 4090 SUPRIM X 24GB GDDR6X"></h5></a>
  </div>
</div>
@endsection