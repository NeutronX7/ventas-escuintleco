<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@extends('layout')

@section('title', 'Ventas')

@section('heading', 'Ventas')

@section('content')
    <div class="row">
        @foreach($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">Precio: ${{ $item->price }}</p>
                        <p class="card-text">Cantidad disponible: {{ $item->quantity }}</p>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
