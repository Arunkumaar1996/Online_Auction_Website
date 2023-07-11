<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('onlineAuction/css/sellerLogin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
    <section class="cardCenter">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="loginCenter p-5">
            <div class="h1 col-2 mx-auto mb-3"><span>Login</span></div>
            <form class="row g-3"action="{{url('authenticate')}}" method="post">
                @csrf
                <div class="col-md-12">
                  <label for="inputFName" class="form-label">User Name</label>
                  <input type="text" class="form-control" name="email" id="inputFName2">
                  <div id="selerror1"></div>
                </div>
                <div class="col-md-12">
                  <label for="inputLName" class="form-label">Password</label>
                  <input type="Password" class="form-control" name="password" id="inputLName2">
                  <div id="selerror2"></div>
                  <div class=""><a href="">Forgot Password</a></div>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <input type="submit" class="btn btn-primary" onclick="sellerlogin()" value="Login">
                  </div>
                  <div class="col-12 cent1">New user register now ? <a href="sellerRegister">Click here</a></div>
                </form>
        </div>   
    </section>
    {{-- <script src="sellerlog.js"></script> --}}
</body>
</html>
