<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="{{asset('onlineAuction/css/homepage.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <section id="navFlex">
        <div id="logoFlex">
            <div id="logo"><img src="{{asset('onlineAuction/image/logo.png')}}" alt=""></div>
            <div id="logoText" class="h3"><span>Online Auction</span></div>
        </div>
        <div>{{$users->email}}</div>
        <nav>
            <ul>
                
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Bidder Login</a></li>
                      <li><a href="sellerLogin" class="dropdown-item" href="#">Seller Login</a></li>
                      <li><a class="dropdown-item" href="#">Admin Login</a></li>
                    </ul>
                  </li>
            </ul>
        </nav>
    </section>
    <section id="navFlex1">
        <ul>

            <li><a href="#">Upcoming Auction</a></li>
            <li><a href="#">Closed Auction</a></li>
        </ul>
        <form action="">
                <input type="text" placeholder="Search..." name="search" id="search">
                <button id="searchButton">Search</button>
        </form>
    </section>
    <section class="align">
        <div class="left text-white">
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="black">
                    <a href="{{url('bidderGold')}}/{{$users->id}}" class="nav-link px-0 align-middle ps-3">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Gold Auction</span> </a>
                    <!-- <ul class="collapse show nav flex-column" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100 white">
                            <a href="../productPage/goldProducts/goldProduct.html" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Bank Gold Auction</span></a>
                        </li>
                        <li class="white">
                            <a href="../../productPage/goldProducts/goldProduct.html" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Traditional Gold Products</span></a>
                        </li>
                    </ul> -->
                </li>
                <li class="black">
                    <a href="{{url('silverProduct')}}/{{$users->id}}" class="nav-link px-0 align-middle ps-3">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Silver Auctions</span></a>
                    <!-- <ul class="collapse nav flex-column" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100 white">
                            <a href="../../productPage/silverProducts/silverProduct.html" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Traditional Silver</span></a>
                        </li>
                        <li class="white">
                            <a href="../../productPage/silverProducts/silverProduct.html" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Bank products Silver</span></a>
                        </li>
                    </ul> -->
                </li>
                <li class="black">
                    <a href="{{url('diamondProduct')}}/{{$users->id}}" class="nav-link px-0 align-middle ps-3">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Diamond Auctions</span></a>
                    <!-- <ul class="collapse nav flex-column" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100 white">
                            <a href="../../productPage/silverProducts/silverProduct.html" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Traditional Silver</span></a>
                        </li>
                        <li class="white">
                            <a href="../../productPage/silverProducts/silverProduct.html" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Bank products Silver</span></a>
                        </li>
                    </ul> -->
                </li>
                
                <!-- <li class="black ">
                    <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle ps-3">
                        <i class="fs-4 bi-grid"></i> <span class="d-none d-sm-inline ms-1">Vehicle Auction</span></a>
                        <ul class="collapse nav flex-column" id="submenu4" data-bs-parent="#menu">
                        <li class="w-100 white">
                            <a href="#" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Product</span></a>
                        </li>
                        <li class="white">
                            <a href="#" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Product</span></a>
                        </li>
                        <li class="white">
                            <a href="#" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Product</span></a>
                        </li>
                        <li class="white">
                            <a href="#" class="nav-link px-0 ps-5"> <span class="d-none d-sm-inline">Product</span> </a>
                        </li>
                    </ul>
                </li> -->
                

            </ul>
        </div>
        <div class="center">
            <div class="h2 text-center mt-2 text-danger">Terms & Conditions</div>
            <div class="center-jus text-justify p-5">  <ul>
                    <li>Want to Purchase our Displayed products, You must Register Our Website.</li>
                    <li>User name & Password Must know & must Remember.</li>
                    <li>Drugs & Weapons not For Auction and Forbidden.</li>
                    <li>Once Bidding is  started Bidders Bid on a Product, No can bid a 3mins Interval Last Bidder of a Auction is Announced as a  Winner.</li>
                    <li>Total online auction time for one product is 8 hours, once winner is Got selected Auction of that Product is Stoped.</li>
                    <li>winner got contact via Registered Email id.</li>
                    <li>Then Winner Know a payment Details via QR code Its Available In our Web site.</li>
                    <li>After Payment completed then you Send ScreenShot of Payment & User name & Password via Registered Email id then our team Verify a Payment Details then shipping is Initiated.</li>
                    <li>You must complete a Payment Within 3 Days of time period.</li>
                    <li>Delivery of Product 5 to 15 Days .</li>
                </ul>

                <h1>Seller  </h1>
                <ul>
                    <li>Want to sell your Products You must Register our Web site.</li> 
                    <li>User Name & Password Must Know & Must Remember.</li> 
                    <li>Drugs & Weapons Not for Auction and Forbidden.</li> 
                    <li>Minimum Age Required to Sell Products In our Website is 18.</li> 
                    <li>Want to sell a products Must Upload a Product Details in Add Product Details Form.</li> 
                    <li>After Registration, Our Team Make online Verification on a Product, then Verification Finished Our Auction team contacts Via Email.</li> 
                    <li>Email content-Please make Direct verification with in 7Days, Office Location Details & Contact Details.</li> 
                    <li>After verification successful Our team make bonding on a product</li> 
                    <li>Your product Got Sale in Auction, Payment Received in Buyer side our Team take a 10% Commission on a Total profit then Credit A payment in your Registered Bank account.</li> 
                   



                </ul></div>
        </div>
    </section>
   
</body>
</html>