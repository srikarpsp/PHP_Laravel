<!DOCTYPE html>
<head>
    <title>ConfirmOrder</title>
    <link rel="stylesheet" href="{{asset('css/MealOrder.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
    <meta charset="UTF-8">
    <meta name="description" content="Adding to Cart page">
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
        <a class="navbar-brand" href="#">PHP Group</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="../orderhistory">Order History</a>
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

                <li class="nav-item">    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link btn btn-danger text-white" type="button" href="route('logout')"
                           onclick="event.preventDefault();
                        this.closest('form').submit();">  {{ __('Log Out') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>


</header>

<main class="main_wrapper">



    {{--<h2 style="color: green">{{$message}}</h2>--}}

    <div id="rest_wrapper">
        <form action="/ordermeals" method="post">
            @csrf
            @foreach($meals as $meal)
                <div class="res_holder">
                    <div class="img_holder">
                        <img src="{{ asset('img/'. $meal->title . '.jpg') }}" alt="biryani" style="width:100%">
                    </div>
                    <div
                        class="rest_info_holder">
                        <div>
                            <nav class="rest_name">
                                <span class="rest_title">{{$meal->title}}</span>
                            </nav>
                            <p class="rest_desc">{{$meal->description}}</p>
                            <span class="cost">${{$meal->cost}}</span>
                            <span class="payment">{{$meal->long_description}}</span>
                        </div>

                        <div style="display: flex; justify-content: center; align-items: center">
                            <a href="/ordermeals/{{$meal->id}}" class="order_btn" > Order</a>
                        </div>
                    </div>

                </div>

        @endforeach

    </div>
    </br>

    {{--<input type="submit" name="spaghetti" class="order_btn" value="Order"/>--}}
    </form>
</main>

<footer>

    <div class="row">
        <p class="footertext">Copyright &copy; 2022 PHP group</p>
    </div>

</footer>
</body>
</html>



