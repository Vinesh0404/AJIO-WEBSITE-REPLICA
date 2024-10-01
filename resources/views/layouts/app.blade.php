<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJIO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@0;1&display=swap" rel="stylesheet">
    
    
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }

        .navbar {
            background-color: white;
            /* White background for navbar */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Box shadow for navbar */
            display: flex;
            align-items: flex-end;
            height: fit-content;
        }

        .navbar-brand img {
            height: 100px;
            width: 100px;
            margin-left: 130px;
            padding-bottom: 0;
            /* Margin left for logo */
        }

        .nav-item .nav-link {
            font-size: 16px;
            margin: 0 15px;
            /* Margin between nav items */
            transition: font-weight 0.3s;
        }

        .nav-item .nav-link:hover {
            font-weight: bold;
            /* Bold on hover */
        }

        .search-bar {
            margin: 0 15px;
        }

        .search-bar input {
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 20px;
            /* Rounded edges for search bar */
        }

        .cart-icon {
            font-size: 24px;
            margin: 0 15px;
            background-color: #1e3a8a;
            /* Darkish blue background */
            padding: 5px;
            border-radius: 50%;
            color: white;
        }

        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .navbar-nav .nav-item {
            display: flex;
            align-items: center;
        }

        .right-nav {
            margin-left: auto;
            /* Aligns these items to the right */
        }

        .carousel-inner {
            border-radius: 25px;
            overflow: hidden;
        }

        .carousel-item img {
            height: 600px;
            /* Adjust height as needed */
            object-fit: cover;
            border-radius: 25px;
        }

        /* Ensure full width and remove padding/margins */
        .container-fluid {
            padding-left: 0 !important;
            padding-right: 0 !important;
            
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand h-50" href="#">
            <img src="{{ asset('images/Ajio-Logo.svg') }}" alt="Logo">
        </a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><span class="material-icons">home</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('order.history') }}">Order History</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register.view') }}">SignUp</a></li>
                <li class="nav-item search-bar">
                    <form>
                        <input type="text" class="form-control" placeholder="Search AJIO">
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}"><span class="material-icons cart-icon">shopping_cart</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>

</html>