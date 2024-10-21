<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar proveedor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<div class="container">
    <h3>Editar proveedor</h3>

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="input-field">
            <input type="text" id="name" name="name" value="{{ $supplier->name }}" required>
            <label for="name">Nombre</label>
        </div>

        <div class="input-field">
            <input type="email" id="email" name="email" value="{{ $supplier->email }}" required>
            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input type="text" id="phone" name="phone" value="{{ $supplier->phone }}" required>
            <label for="phone">Teléfono</label>
        </div>

        <button type="submit" class="btn blue">Actualizar proveedor</button>
    </form>

    <div style="margin-top: 20px;">
        <a href="{{ route('suppliers.index') }}" class="btn grey">Cancelar</a>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
