<!-- resources/views/addcategory.blade.php -->

@extends('admin.layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Category</div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-tag"></i></span>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Category Image</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-image"></i></span>
                                </div>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

@endsection

@section('styles')
<style>
    body {
        background: url('https://c4.wallpaperflare.com/wallpaper/561/117/145/the-city-rockstar-grand-theft-auto-v-los-santos-wallpaper-preview.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        color: #333;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: rgb(242, 134, 221);
        background: linear-gradient(90deg, rgba(242, 134, 221, 0.899193002396271) 0%, rgba(255, 170, 139, 0.9047952432926296) 50%, rgba(252, 176, 69, 0.899193002396271) 100%);
        margin: 20px 0;
        animation: slideIn 1s ease-in-out;
        max-width: 600px;
    }

    @keyframes slideIn {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .card-header {
        border-bottom: none;
        background-color: transparent;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        color: #01204E;
    }

    .form-control {
        border-radius: 10px;
        transition: box-shadow 0.3s;
    }

    .form-control:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .input-group-text {
        border-radius: 10px 0 0 10px;
        background-color: #ffffff;
        border: none;
        border-right: 1px solid #ced4da;
    }

    .btn-primary {
        background-color: #3572EF;
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-size: 1rem;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .form-group {
        margin-bottom: 1.2rem;
    }

    .container {
        padding: 50px;
        margin-top: 30px;
    }

    .input-group {
        margin-bottom: 1rem;
    }

    .input-group-prepend .input-group-text {
        background-color: #e9ecef;
    }

    .input-group-text i {
        color: #007bff;
    }

    .input-group input::placeholder {
        color: #999;
        opacity: 1;
    }

    .input-group input:focus::placeholder {
        opacity: 0;
    }

    .text-center {
        text-align: center;
    }
</style>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
