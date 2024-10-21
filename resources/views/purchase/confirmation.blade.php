@extends('layout')

@section('title', 'Confirmación de Compra')

@section('heading', 'Compra Confirmada')

@section('content')
    <h3>Detalles de su compra:</h3>
    <ul>
        @foreach($purchaseDetails as $item)
            <li>{{ $item['name'] }} - Cantidad: {{ $item['quantity'] }} - Total: ${{ $item['total'] }}</li>
        @endforeach
    </ul>

    <h4>Escanee el código QR para detalles de la compra</h4>
    <div>{!! $qrCode !!}</div>

    <div class="mt-4">
        <a href="{{ url('/sales') }}" class="btn btn-primary">Seguir comprando</a>
    </div>
@endsection
