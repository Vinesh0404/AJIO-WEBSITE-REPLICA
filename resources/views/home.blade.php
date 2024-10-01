@extends('layouts.app')

@section('content')

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide custom-carousel w-100" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active custom-carousel-item">
            <img class="d-block w-100" src="https://assets.ajio.com/cms/AJIO/WEB/210624-D-1.0-UHP-redhotsale-5090-New.gif" alt="First slide">
        </div>
        <div class="carousel-item custom-carousel-item">
            <img class="d-block w-100" src="https://assets.ajio.com/cms/AJIO/WEB/D-1.0-UHP-26062024-MainBannerDailyChanging-Z1-P2-Puma-Nike-Min50.jpg" alt="Second slide">
        </div>
        <div class="carousel-item custom-carousel-item">
            <img class="d-block w-100" src="https://assets.ajio.com/cms/AJIO/WEB/D-1.0-UHP-26062024-MainBannerDailyChanging-Z1-P3-Wrangler-Vanheusen-Min50.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Single Image Section -->
<div class="my-5 w-100 mx-0">
    <img src="https://assets.ajio.com/cms/AJIO/WEB/D-1.0-UHP-05042024-bankoffers-Z1-5instant-prepaid.jpg" class="img-fluid" alt="Responsive image">
</div>

<!-- Category Section -->
<div class="my-5">
    <h2 class="text-center" style="font-family: 'Arial', sans-serif;">Categories</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 custom-card">
                <img class="card-img-top custom-card-img" src="abcd.jpg" alt="Men category">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Arial', sans-serif;">Men</h5>
                    <div class="card-body d-flex flex-column align-items-center">
                        <a href="#" class="btn custom-btn">Check out</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 custom-card">
                <img class="card-img-top custom-card-img" src="https://assets.ajio.com/cms/AJIO/WEB/D-1.0-UHP-01062024-AJIOEXCLUSIVES-z8-Sam-3050.jpg" alt="Women category">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Arial', sans-serif;">Women</h5>
                    <div class="card-body d-flex flex-column align-items-center">
                        <a href="#" class="btn custom-btn">Check out</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 custom-card">
                <img class="card-img-top custom-card-img" src="kids.jpg" alt="Kids category">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Arial', sans-serif;">Kids</h5>
                    <div class="card-body d-flex flex-column align-items-center">
                        <a href="#" class="btn custom-btn">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5 w-100 mx-0">
    <img src="https://assets.ajio.com/cms/AJIO/WEB/D-1.0-UHP-26062024-URGENCYSTRIPS-P1-livenow.gif" class="img-fluid" alt="Responsive image">
</div>

<!-- About Us Section -->
<div class="my-0 p-4" style="background-color: #344C64; color: white; border-radius: 10px;">
    <h2 class="text-center mb-4" style="font-family: 'Arial', sans-serif;">About Us</h2>
    <p style="font-size: 1.1rem; line-height: 1.6;">
        At AJIO, we believe that fashion is for everyone. We bring you the trendiest styles from across the globe and the best in Indian fashion. Our collections feature a wide array of products for Men, Women, and Kids. Whether you're looking for the latest fashion trends or timeless classics, AJIO has something for everyone. Our mission is to offer high-quality products at affordable prices, with exceptional customer service. Join us in celebrating the joy of fashion, and make AJIO your go-to online shopping destination.
    </p>

    <div class="d-flex justify-content-around flex-wrap">
        <div style="width: 200px;">
            <h3 style="font-size: 1rem; font-weight: bold;">Ajio</h3>
            <ul style="list-style-type: none; padding-left: 0;">
                <li style="font-size: 0.9rem;">Who We Are</li>
                <li style="font-size: 0.9rem;">Join Our Team</li>
                <li style="font-size: 0.9rem;">Terms & Conditions</li>
                <li style="font-size: 0.9rem;">We Respect Your Privacy</li>
                <li style="font-size: 0.9rem;">Fees & Payments</li>
                <li style="font-size: 0.9rem;">Returns & Refunds Policy</li>
                <li style="font-size: 0.9rem;">Promotions Terms & Conditions</li>
            </ul>
        </div>

        <div style="width: 200px;">
            <h3 style="font-size: 1rem; font-weight: bold;">Help</h3>
            <ul style="list-style-type: none; padding-left: 0;">
                <li style="font-size: 0.9rem;">Track Your Order</li>
                <li style="font-size: 0.9rem;">Frequently Asked Questions</li>
                <li style="font-size: 0.9rem;">Returns</li>
                <li style="font-size: 0.9rem;">Cancellations</li>
                <li style="font-size: 0.9rem;">Payments</li>
                <li style="font-size: 0.9rem;">Customer Care</li>
                <li style="font-size: 0.9rem;">How Do I Redeem My Coupon</li>
            </ul>
        </div>

        <div style="width: 200px;">
            <h3 style="font-size: 1rem; font-weight: bold;">Shop by</h3>
            <ul style="list-style-type: none; padding-left: 0;">
                <li style="font-size: 0.9rem;">Men</li>
                <li style="font-size: 0.9rem;">Women</li>
                <li style="font-size: 0.9rem;">Kids</li>
            </ul>
        </div>

        <div style="width: 200px;">
            <h3 style="font-size: 1rem; font-weight: bold;">Follow us</h3>
            <ul style="list-style-type: none; padding-left: 0;">
                <li style="font-size: 0.9rem;">Facebook</li>
                <li style="font-size: 0.9rem;">Instagram - AJIOlife</li>
                <li style="font-size: 0.9rem;">Instagram - AJIO LUXE</li>
                <li style="font-size: 0.9rem;">Twitter</li>
                <li style="font-size: 0.9rem;">Pinterest</li>
            </ul>
        </div>
    </div>

    <hr style="border: 1px solid white; margin-top: 20px;">
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
        /* Set the background color to grey */
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
        /* Adjust the animation duration */
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