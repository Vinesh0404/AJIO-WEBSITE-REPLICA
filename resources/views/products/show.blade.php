@extends('layouts.app')

@section('content')
<div class="my-5">
    <h2 class="text-center" style="font-family: 'Arial', sans-serif;">{{ $category->name }}</h2>
    <div class="row">
        @foreach($category->products as $product)
        <div class="col-md-4">
            <div class="card mb-4 custom-card">
                <img class="card-img-top custom-card-img" src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Arial', sans-serif;">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>${{ $product->price }}</strong></p>
                    <form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit" class="btn custom-btn">Add to Cart</button>
</form>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
