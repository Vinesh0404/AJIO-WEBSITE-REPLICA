<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
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
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sign Up</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user_type">User Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                    </div>
                                    <select class="form-control" id="user_type" name="user_type" required>
                                        <option value="customer">Customer</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="other" name="gender" value="other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>