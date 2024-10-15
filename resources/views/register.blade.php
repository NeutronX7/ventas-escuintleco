<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/register-styles.css') }}">
    </head>
    <body>
    <div class="register-container">
        <h2>Registrarse</h2>
        <form action="{{ route('register.register') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nombre</label>
                <label>
                    <input type="text" name="name" required>
                </label>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <label>
                    <input type="password" name="password" required>
                </label>
            </div>
            <div>
                <label for="password_confirmation">Confirmar contraseña</label>
                <label>
                    <input type="password" name="password_confirmation" required>
                </label>
            </div>
            <button type="submit">Register</button>
        </form>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    </body>
</html>
