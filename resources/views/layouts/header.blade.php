<style>
    .fa-solid {
        color: white;
    }
</style>

<nav class="navbar navbar-expand-sm bg-primary bg-opacity-50">
    <a class="navbar-brand ms-4" href="/">
        <p class="fs-4 fw-bold text-white pt-2">My INE eShop</p>
    </a>
    <form class="d-flex form-inline" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" style="width: 400px;">
        <button class="btn btn-success" type="submit">Buscar</button>
    </form>
    <ul class="navbar-nav ms-auto pt-1">
        <li class="nav-item">
            @if(Auth::check())
            <a class="nav-link text-white" href="{{ route('user.edit') }}">{{ Auth::user()->name }}</a>
        <li class="nav-item">
            <a href="user/logout"><i class="fa-solid fa-circle-xmark mt-3"></i></a>
        </li>
        @else
        <a class="nav-link text-white" href="login">Autenticación</a>
        @endif


        </li>
        <li class="nav-item me-2">
            <a class="nav-link" href="/cart">
                <span class="material-symbols-outlined text-white">shopping_cart</span>
                <span class="badge rounded-pill bg-danger">
                    @php
                    if(session()->has('cart') && session()->get('cart')->iTotalItems > 0){
                    echo session()->get('cart')->iTotalItems;
                    } else {
                    echo 0;
                    }
                    @endphp
                </span>
            </a>
        </li>
</nav>