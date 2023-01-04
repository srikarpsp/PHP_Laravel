<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="{{asset('css/AboutUs.css')}}" />
    <meta charset="UTF-8">
    <meta name="description" content="Meal ordering page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/HomePageStyle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
</head>
<body>
<header class="header_wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">Canadian Spicy Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
                </li>
            </ul>
        </div>

    </nav>

</header>

<main>
    @foreach($aboutus as $about)
    <div>
        <h1>{{$about->Desc_1}}</h1>
    </div>

    <img src="{{ asset('img/'. $about-> img_1 .'.jpg') }}" alt="picture of staff">

    <div class="floatright">
        <p>{{$about->Desc_2}}</p>

        <p>{{$about->Desc_3}}</p>
    </div>
    <a class=event_link href="../event">Events</a>

    <p class="floatright">
        {{$about->Desc_4}}</p>

    <div class="row">
        <div class="column">
            <img src="{{ asset('img/'. $about-> img_2 .'.jpg') }}" alt="event1" style="width:100%">
        </div>
        <div class="column">
            <img src="{{ asset('img/'. $about-> img_3 .'.jpg') }}" alt="event2" style="width:100%">
        </div>
        <div class="column">
            <img src="{{ asset('img/'. $about-> img_4 .'.jpg') }}" alt="event3" style="width:100%">
        </div>
    </div>

    <p class="floatright">{{$about->Desc_7}}</p>
    </br></br>
    <h2>Combo Special On wednesday for regular customers</h2>
    </br></br>

    <div class="row">
        <div class="column">
            <img src="{{ asset('img/combo1.jpeg') }}" alt="combo1" style="width:100%">
        </div>
        <div class="column">
            <img src="{{ asset('img/combo2.png') }}" alt="combo2" style="width:100%">
        </div>
        <div class="column">
            <img src="{{ asset('img/combo3.jpg') }}" alt="combo3" style="width:100%">
        </div>

    </div>
    <p class="floatright">
        The next Wednesday Combo will be held:
        <b> <span id="nextwednes">NEXT WEDNESDAY</span></b> see you soon
    </p>
    @endforeach
</main>
<footer>
      <span class="copyright_text">Copyright &copy; 2021 Canadian Spicy</span>
</footer>
</body>
</html>
