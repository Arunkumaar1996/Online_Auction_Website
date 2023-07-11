<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('onlineAuction/css/productDetails.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <section id="navFlex">
        <div id="logoFlex">
            <div id="logo"><img src="{{asset('onlineAuction/image/logo.png')}}" alt=""></div>
            <div id="logoText" class="h3"><span>Online Auction</span></div>
        </div>
        <nav>
            <ul>
                <li><a href="{{url('homepage')}}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </section>
    <!-- photo -->
    <section>
        <div class="center1">
            <div class="images"><img src="{{$users['photo1']}}" alt="" srcset=""></div>
            <div class="name h3 text-primary mt-2"><h1>{{$users['name']}}!</h1></div>
            <div class="name h3 text-primary mt-2"><h1>{{$users['email']}}!</h1></div>
            {{-- auth()->sellerregisters()->name --}}
        </div>
        <div class="list">
        <div class="center2 row h2 mt-5">
            <div class="items col-md-5"><a href="{{url('form')}}/{{$users->id}}">Add Product</a></div>
            <div class="items col-md-5"><a href="{{url('sellerStatus')}}/{{$users->email}}">Products Status</a></div>
        </div>
    </div>
    </section>
</body>
</html>