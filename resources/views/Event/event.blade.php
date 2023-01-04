<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Home page" />
    <meta name="keywords" content=" Restaurants,tour,seacrh,food,career guide,trackorder" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/EventStyle.css')}}" />

</head>
<body>
<div class="container">
    <div class="row">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">PHP Group</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="../HomePage">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ordermeals">Order Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../discount">Discount</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../AboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ContactUs">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../CustomerReview">Customer Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../CareerPage">Career</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="#" data-toggle="modal" data-target="#myModal">log out</a>
                </li></ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-8">
    <h1>Our project event</h1>
    <ul id="demo1">
        @foreach($event as $e)
        <li> <p>{{$e->date}}</p>
            <div class="word">
                {{$e->description}}
            </div> </li>
        @endforeach
    </ul>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
<footer>
    <div class="row">
        <p class="footertext">Copyright &copy; 2022 PHP group</p>
    </div>
</footer>
</body>
</html>





