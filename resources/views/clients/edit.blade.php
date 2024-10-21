<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <!-- Materialize CSS for Material Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<div class="container">
    <h3>Editar Cliente</h3>

    <!-- Edit Client Form -->
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name Input -->
        <div class="input-field">
            <input type="text" id="name" name="name" value="{{ $client->name }}" required>
            <label for="name">Nombre</label>
        </div>

        <!-- Email Input -->
        <div class="input-field">
            <input type="email" id="email" name="email" value="{{ $client->email }}" required>
            <label for="email">Email</label>
        </div>

        <!-- Phone Input -->
        <div class="input-field">
            <input type="text" id="phone" name="phone" value="{{ $client->phone }}" required>
            <label for="phone">Teléfono</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn blue">Actualizar Cliente</button>
    </form>

    <!-- Go Back Button -->
    <div style="margin-top: 20px;">
        <a href="{{ route('clients.index') }}" class="btn grey">Cancelar</a>
    </div>
</div>

<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
