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
                <!-- <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="../login/bidderLoginPage/bidderLogin.html">Bidder Login</a></li>
                    <li><a class="dropdown-item" href="../login/sellerLoginPage/sellerLogin.html">Seller Login</a></li>
                    <li><a class="dropdown-item" href="../login/adminLoginPage/adminLogin.html">Admin Login</a></li>
                  </ul>
                </li> -->
            </ul>
        </nav>
    </section>
    <section class="flex1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset($datas->image_url1)}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset($datas->image_url2)}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset($datas->image_url3)}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="flex2">
            <div class="productName h4">{{$datas->productname}}</div>
            <div class="lablePrice h5 text-success">Start Bidding Price</div>
            <div class="price h3"> <span>Rs.</span>{{$datas->startingbidding}}<del class="h5 text-danger"> Rs.{{$datas->actualprice}}</del></div>
            <div class="Description">
                <div class="mt-3 mb-2 h4">Description :</div>
                <!-- <div class="mt-3 mb-2 pe-5">Capture more of your world.Professional-looking vlogs are easy with the ZV-E10, thanks to interchangeable lenses that capture the world however you choose to see it. Watch the video below to discover some of the many creative possibilities.The ZV-E10's image-stabilisation system can shoot smooth, clean video footage even when you're walking6. Another feature, Face Priority Auto Exposure (AE), will automatically brighten the lighting of your face. Even when you're walking, it automatically detects your face and makes adjustments to keep it brightly lit as you move from indoors to outdoors, through light or shadow.,suitable_for-Enthusiast,-,sensor_type-Large APS-CExmor CMOS sensor,continuous_shooting_speed-5 fps</div> -->
                <div class="discr mt-4 ms-4">{{$datas->description}}</div>
            </div>
            <div class="start mt-3 h5">
                Bidding Starting date : <span class="h4 text-danger">{{$datas->startingdate}}</span>
            </div>
            <div class="start mt-3 h5">
                Bidding Starting Time : <span class="h4 text-danger">{{$datas->startingtime}}</span>
            </div>
            <div class="button">
                <a href="../beddingPage/index.html"><button type="button" class="btn btn-primary mt-5">Let's Bidd</button></a>
            </div>   
        </div>
    </section>
</body>
</html>