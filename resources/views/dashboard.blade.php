<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard/slider.css') }}">

    <title>Dashboard</title>
</head>
<body>
<div class="slider-container">
    <h1>Casas el escuintleco</h1>
    <div class="slider">
        <div class="slide" id="slide1">
            <a href="{{ url('/delivery') }}">
                <span class="material-icons">local_shipping</span>
                <h3>Devoluciones</h3>
            </a>
        </div>
        <div class="slide" id="slide1">
            <a href="{{ url('/sales') }}">
                <span class="material-icons">storefront</span>
                <h3>Despacho</h3>
            </a>
        </div>
        <div class="slide" id="slide2">
            <a href="{{ url('/puntos-de-venta') }}">
                <span class="material-icons">store</span>
                <h3>Puntos de venta</h3>
            </a>
        </div>
        <div class="slide" id="slide5">
            <a href="{{ url('/catalog') }}">
                <span class="material-icons">inventory</span>
                <h3>Catálogo</h3>
            </a>
        </div>
        <div class="slide" id="slide6">
            <a href="{{ url('/analytics') }}">
                <span class="material-icons">description</span>
                <h3>Informes</h3>
            </a>
        </div>
    </div>
</div>

<div class="product-preview">
    <h2>Productos Destacados</h2>
    <div class="product-grid">
        <div class="product">
            <h4>Leche Entera</h4>
            <p>1 Litro - Q10.00</p>
        </div>
        <div class="product">
            <h4>Frutas Mixtas</h4>
            <p>Porción - Q15.00</p>
        </div>
        <div class="product">
            <h4>Refresco de Naranja</h4>
            <p>500ml - Q5.00</p>
        </div>
    </div>
</div>

<div class="company-info">
    <h2>Acerca de Nosotros</h2>
    <p>
        Somos una empresa dedicada a la venta de productos de primera necesidad, incluyendo alimentos y bebidas,
        con el objetivo de ofrecer siempre la mejor calidad a nuestros clientes. Nos enfocamos en mantener un stock
        variado que cubra todas las necesidades diarias de las familias guatemaltecas.
    </p>
</div>

<div class="logout-container">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">
            <span class="material-icons">logout</span>
            Cerrar sesión
        </button>
    </form>
</div>

</body>
</html>
