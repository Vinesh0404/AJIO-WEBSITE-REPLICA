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
            background-color: orange;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-end;
            height: fit-content;
        }

        .navbar-brand img {
            height: 100px;
            width: 100px;
            margin-left: 130px;
            padding-bottom: 0;
        }

        .nav-item .nav-link {
            font-size: 16px;
            margin: 0 15px;
            transition: font-weight 0.3s;
        }

        .nav-item .nav-link:hover {
            font-weight: bold;
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
        }

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
                    <a class="nav-link" href="{{ route('admindashboard') }}"><span class="material-icons">home</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Order History</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('addproducts.create') }}">Add Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories.create') }}">Add Category</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
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
