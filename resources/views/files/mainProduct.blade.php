<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{asset('onlineAuction/css/productRender.css')}}">
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
    <div class="boxsize container mt-4">
    
    <div class="row row-cols2 row-cols-md-5 g-4">
    @foreach($datas as $data)
    <div class="col text-center">
          <div class="card">
            <img src="{{asset($data->image_url1)}}" class="card-img-top" alt="...">
            <div class="card-body">
            
              <div class="card-title fw-bold"><?php $str1=explode(' ',"$data->productname");print_r($str1[0].' '.$str1[1].' '.$str1[2]);   ?></div>
              <div class="card-text ">
                <P><?php $str1=explode(' ',"$data->description");print_r($str1[0].' '.$str1[1].' '.$str1[2].' '.$str1[3].' '.$str1[4]);   ?></P>
                <div class="h5 fw-bold"><span>Rs. </span>{{$data->startingbidding}}</div>
                <!-- <div class="d-grid gap-1 col-12 mx-auto"> -->
                    <a class="btn btn-primary" href="{{url('productDetails')}}/{{$data->id}}">Details</a>
                  <!-- </div> -->
            </div>
            </div>
          </div>
        </div>
        @endforeach

    
        </div>
        </div>
    

</body>
</html>