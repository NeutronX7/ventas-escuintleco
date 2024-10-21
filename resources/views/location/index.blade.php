<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntos de Venta</title>
    <style>
        .location-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .location-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .location-card h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

@extends('layout')

<h1>Puntos de Venta</h1>
<div class="location-grid">
    @foreach ($locations as $location)
        <div class="location-card">
            <h3>{{ $location['name'] }}</h3>
            <p>{{ $location['address'] }}</p>
            <p>Latitud: {{ $location['latitude'] }}</p>
            <p>Longitud: {{ $location['longitude'] }}</p>
        </div>
    @endforeach
</div>

</body>
</html>
