@extends('layout')

@section('title', 'Carrito de Compras')

@section('heading', 'Carrito de Compras')

@section('content')
    <div class="row mb-4">
        @if(session('cart') && count(session('cart')) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $id => $details)
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>${{ $details['price'] }}</td>
                        <td>
                            <form action="{{ route('cart.update', $id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" style="width: 60px;">
                                <button type="submit" class="btn btn-sm btn-success">Actualizar</button>
                            </form>
                        </td>
                        <td>${{ $details['price'] * $details['quantity'] }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No hay productos en el carrito.</p>
        @endif
    </div>

    @if(session('cart') && count(session('cart')) > 0)
        <!-- Existing table code -->

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ url('/sales') }}" class="btn btn-secondary">Seguir comprando</a>

            <form action="{{ route('cart.confirm') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Confirmar Compra</button>
            </form>
        </div>
    @endif
@endsection
