<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('onlineAuction/css/sellerRegister.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
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
    <div class="mx-auto m-2 h1" style="width: 200px;color:white; ">Registration</div>
    <section class="container border1 p-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-md-4 mb-1"><h3>Bidder Registration Form</h3></div>
    <form class="row g-3" id="form" action="{{url('bidderform-save')}}" method="post" enctype="multipart/form-data">
    @csrf      
    <div class="col-md-4">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Your Email ID">
          </div>
          <div class="col-md-4">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password in 8 char Above">
          </div>
          <div class="col-md-4">
              <label for="inputCPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="inputCPassword" name="password_confirmation" placeholder="Re-enter Password">
            </div>
        <div class="col-md-4">
          <label for="inputFName" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="inputFName">
          <!-- <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="col-md-4">
          <label for="inputLName" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" name="date_of_birth" id="inputdob">
        </div>
        <div class="col-md-4">
          <label for="inputCategory" class="form-label">Districts</label>
          <select id="inputState" name="district" class="form-select">
            <option selected></option>
            <option>Chennai</option>
            <option>Chengalpattu</option>
            <option>Coimdatoru</option>
            <option>Dindukkal</option>
            <option>Erodu</option>
            <option>Kancheepuram</option>
            <option>Karur</option>
            <option>Krishnagiri</option>
            <option>Madurai</option>
            <option>Namakkal</option>
            <option>Ramanathapuram</option>
            <option>Salem</option>
            <option>Thanjavur</option>
            <option>Theni</option>
            <option>Thiruvallur</option>
            <option>Thoothukudi</option>
            <option>Tirucharappalli</option>
            <option>Tirunelveli</option>
            <option>Tiruppur</option>
            <option>Tiruvannamalai</option>
            <option>Nilgiris</option>
            <option>Vellore</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputAddress2" class="form-label">Address</label>
          <textarea type="text" row="3" name="address" class="form-control" id="inputAddress" placeholder=""></textarea>
        </div>
        <div class="col-md-6">
          <label for="inputLMobile" class="form-label">Mobile Number</label>
          <input type="number" class="form-control" name="mobile_no" id="inputMobile">
        </div>
        <div class="col-md-6">
          <label for="pan_card" class="form-label">Pan Card</label>
          <input type="file" class="form-control" name="pan_card" id="pan_card">
        </div>
        <div class="col-md-6">
          <label for="inputPhoto" class="form-label">Bank Passbook Front Page</label>
          <input type="file" class="form-control" name="bank_book" id="inputPhoto">
        </div>
       
        <div class="col-md-6">
          <label for="inputPhoto" class="form-label">Upload your Photo</label>
          <input type="file" class="form-control" name="photo" id="inputPhoto">
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Aadhar Front Page Image Upload</label>
          <input type="file" class="form-control" name="aadhar_front" id="inputAFP">
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Aadhar Back Page Image Upload</label>
          <input type="file" class="form-control" name="aadhar_back" id="inputABP">
        </div>
        <div class="col-md-6">
          {{-- <label for="status" class="form-label"></label> --}}
          <input type="hidden" name="update" class="form-control" id="update" value="Updating">
        </div>
        <div class="d-grid gap-2 text-center mx-auto">
            <input class="btn btn-primary" type="submit" placeholder="Register">
            <div class="col-12 cent1"><a href="../../login/sellerLoginPage/sellerLogin.html">Already have an account?</a></div>
          </div>
          <div  class="col-md-4" id="dataContainer">



          </div>

  <!-- <script src="http://localhost/AuctionOnlineNew/AuctionOnlineNew/registerPage/sellerRegister/script2.js"></script> -->



      </form>
    </section>
</body>
</html>