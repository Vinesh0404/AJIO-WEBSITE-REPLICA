@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Shopping Cart</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $productId => $product)
            <tr>
                <td><img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" width="50"></td>
                <td>{{ $product['name'] }}</td>
                <td>${{ $product['price'] }}</td>
                <td>
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $productId }}">
                        <input type="number" name="quantity" value="{{ $product['quantity'] }}" min="1">
                        <button type="submit" class="btn btn-info btn-sm">Update</button>
                    </form>
                </td>
                <td>${{ $product['price'] * $product['quantity'] }}</td>
                <td>
                    <form action="{{ route('cart.remove') }}" method="POST" style="display:inline-block;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $productId }}">
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('cart.clear') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-warning">Clear Cart</button>
    </form>

    @else
    <div class="alert alert-info mt-4">Your cart is empty.</div>
    @endif

</div>
@endsection

