@extends ('templates.master')

@section ('productos')
<div class="card">
    <div class="card-body content-center">
        <p class="card-text"> {{ $product->Company->name }} </p>
        <p class="card-text">{{ $product->description }}</p>
    </div>
</div>
@endsection