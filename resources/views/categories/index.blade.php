@extends('layouts.app')

@section('content')
<div class="my-5">
    <h2 class="text-center" style="font-family: 'Arial', sans-serif;">Categories</h2>
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card mb-4 custom-card">
                <img class="card-img-top custom-card-img" src="{{ asset($category->image_path) }}" alt="{{ $category->name }} category">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Arial', sans-serif;">{{ $category->name }}</h5>
                    <div class="card-body d-flex flex-column align-items-center">
                        <a href="{{ route('categories.show', ['category' => $category->category_id]) }}" class="btn custom-btn">Check out</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<!-- Custom CSS -->
<style>
    .carousel-indicators {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel-indicators li {
        position: relative;
        background-color: grey;
        width: 30px;
        height: 3px;
        margin: 2px;
    }

    .carousel-indicators li::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.5);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 3s linear;
        opacity: 0;
    }

    .carousel-indicators .active::after {
        animation: loading 6s linear forwards;
        opacity: 1;
    }

    @keyframes loading {
        0% {
            transform: scaleX(0);
        }

        100% {
            transform: scaleX(1);
        }
    }

    .card-title {
        text-align: center;
    }

    .custom-card {
        border-radius: 50px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .custom-card-img {
        border-top-left-radius: 50px !important;
        border-top-right-radius: 50px !important;
        width: 100%;
        height: 400px; /* Set a fixed height for all images */
        object-fit: cover; /* Ensure images cover the area without distorting */
    }

    .custom-btn {
        background-color: #FFEEA9;
        color: black;
        border-color: #FFEEA9;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #FFF5E1;
        color: #333;
    }

    .card-title {
        font-family: 'Arial', sans-serif;
    }
</style>
