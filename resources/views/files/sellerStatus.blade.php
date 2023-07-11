<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    
                    
                    <li><a href="{{url('sellerLogin')}}">Logout</a></li>
                    
                </ul>
            </nav>
        </section>
    <table class="table container mt-5">
        <thead class="table-dark">
        <th>Item Product</th>
              <th>Product name</th>
              <th>Select Unit</th>
              <th>Unit Value</th>
              <th>Description</th>
              <th>Actualprice</th>
              <th>Starting Bidding</th>
              <th>Starting Date</th>
              <th>Starting Time</th>
              <th>Image-1</th>
              <th>Image-2</th>
              <th>Image-3</th>
              <th>Status</th>

              
        </thead>
        <tbody>
         
        @foreach($datas as $data)
              <tr>
                <td>{{$data->selectcategory}}</td>
                <td>{{$data->productname}}</td>
                <td>{{$data->selectunit}}</td>
                <td>{{$data->unitvalue}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->actualprice}}</td>
                <td>{{$data->startingbidding}}</td>
                <td>{{$data->startingdate}}</td>
                <td>{{$data->startingtime}}</td>
                <td><img src="{{asset($data->image_url1)}}" alt="" srcset="" width="100px" height="100px"></td>
                <td><img src="{{asset($data->image_url2)}}" alt="" srcset="" width="100px" height="100px"></td>
                <td><img src="{{asset($data->image_url3)}}" alt="" srcset="" width="100px" height="100px"></td>
                <td>{{$data->status}}</td>
                
            
              </tr>
              @endforeach
        </tbody>
      </table>
          
</body>
</html>