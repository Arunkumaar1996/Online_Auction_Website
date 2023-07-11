<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('onlineAuction/css/addform.css')}}">
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
                
                <li><a href="{{url('authenticate')}}">Back</a></li>
            </ul>
        </nav>
    </section>
    <div class="mx-auto m-3 h1 col-7 mx-auto cent1">Sell your product to register</div>
    <section class="container border1 p-5">
        <div class="col-md-4 mb-1"><h3>Add product Form</h3></div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="row g-3" action="{{url('form-save')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="col-md-4">
        <label for="selectcategory" class="form-label">select category</label>
        <select id="selectcategory" name="selectcategory" class="form-select">
          <option selected></option>
          <option>Gold Category</option>
          <option>Silver Category</option>
          <option>Diamond Category</option>
        </select>
      </div>
        <div class="col-md-8">
          <label for="productname" class="form-label">Enter the product name</label>
          <input type="text" class="form-control" name="productname" id="productname">
        </div>
        
        <div class="col-md-4">
            <label for="selectunit" class="form-label">Select Unit</label>
            <select id="selectunit" name="selectunit" class="form-select">
              <option selected></option>
              <option>Gram</option>
              <option>Kilogram</option>
              <option>Litre</option>
              <option>Meters</option>
              <option>Centimeter</option>
            </select>
          </div>
        <div class="col-md-4">
          <label for="unitvalue" class="form-label">Enter Unit value</label>
          <input type="text" class="form-control" name="unitvalue" id="unitvalue">
        </div>
		<div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <input type="hidden" class="form-control" name="email" id="email" value="{{$datas->email}}">
        </div>
        <div class="col-md-12">
          <label for="description" class="form-label">Description in your product</label>
          <textarea type="text" rows="3" name="description" class="form-control" id="description" placeholder="Description in your product details maximum 120 words"></textarea>
        </div>
        <div class="col-md-6">
            <label for="actualprice" class="form-label">Actual price of the product</label>
            <input type="number" class="form-control" name="actualprice" id="actualprice">
        </div>
        <div class="col-md-6">
            <label for="startingbidding" class="form-label">Bidding price of the product</label>
            <input type="number" class="form-control" name="startingbidding" id="startingbidding">
        </div>
        <div class="col-md-4">
          <label for="image1" class="form-label">Choose best Image 1</label>
          <input type="file" class="form-control" name="image1" id="image1">
        </div>
        <div class="col-md-4">
          <label for="image2" class="form-label">Choose best Image 2</label>
          <input type="file" class="form-control" name="image2" id="image2">
        </div>
        <div class="col-md-4">
          <label for="image3" class="form-label">Choose best Image 3</label>
          <input type="file" class="form-control" name="image3" id="image3">
        </div>
        <div class="col-md-6">
          <label for="startingdate" class="form-label">Auction starting date</label>
          <input type="date" class="form-control" name="startingdate" id="startingdate">
        </div>
        <div class="col-md-6">
          <label for="startingtime" class="form-label">Auction starting time</label>
          <input type="time" class="form-control" name="startingtime" id="startingtime">
        </div>
        <input type="text" name="status" id="status" value="Updating Soon...">
        
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" name="gridCheck" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Terms and Conditions
            </label>
          </div>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-primary" type="submit">Register</button>
          </div>

      </form>
    </section>
</body>
</html>