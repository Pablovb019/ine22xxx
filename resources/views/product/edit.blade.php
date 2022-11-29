@extends ('templates.master')

@section('editar_producto')
<div class="card">
    <div class="card-header text-center font-weight-bold">
        Datos del producto
    </div>
    <div class="card-body">
        <form name="edit-user-form" id="edit-user-form" action="{{ route('product.update', ['product' => $product]) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">{{ __('auth.Name') }}</label>
                <input type="text" id="name" name="name" class="form-control" required="" value="{{ $product->name }}"   />
                <br>
                <label for="company_id">{{ __('auth.Company') }}</label>
                <select class="form-control" name="company_id" id="company_id" required>
                    <option value="{{ $product->company_id }}" selected>{{ $product->company->name }}</option>
                    @foreach ($aCompany as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
                <br>
                <label for="description">{{ __('auth.Description') }}</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $product->description }}</textarea>
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection