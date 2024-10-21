<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS (Material Design Framework) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            padding: 20px;
        }
        .table-container {
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>

<h1>Catálogo</h1>

<!-- Clients Section -->
<div class="table-container">
    <h4>Clientes</h4>
    <table class="striped centered">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn-small orange">Editar</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-small red">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create') }}" class="btn green">Agregar Cliente</a>
</div>

<!-- Suppliers Section -->
<div class="table-container">
    <h4>Proveedores</h4>
    <table class="striped centered">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->phone }}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn-small orange">Editar</a>
                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-small red">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('suppliers.create') }}" class="btn green">Agregar Proveedor</a>
</div>

<!-- Products Section -->
<div class="table-container">
    <h4>Productos</h4>
    <table class="striped centered">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Proveedor</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->supplier_id }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn-small orange">Editar</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-small red">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('products.create') }}" class="btn green">Agregar Producto</a>
</div>

<!-- Go Back Button -->
<div class="center-align" style="margin-top: 40px;">
    <a href="{{ url('/') }}" class="btn-large blue">Volver al Dashboard</a>
</div>

<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
