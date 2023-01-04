 <!DOCTYPE html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="{{asset('css/Cart.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
    <meta charset="UTF-8">
    <meta name="description" content="Cart page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    {{--<link rel="stylesheet" href="{{asset('css/HomePageStyle.css')}}" />--}}

</head>

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
                    <a class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal"
                       data-target="#myModal">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="#" data-toggle="modal"
                       data-target="#myModal">log out</a>
                </li>
            </ul>
        </div>
    </nav>


</header>
    <style>
        * {
            box-sizing: border-box;
        }

        .img-container {
            float: left;
            width: 20%;
            padding: 5px;

        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>

<main style="margin-bottom: 8%">
<h2>Cart Page</h2>
<p>Order details:</p>
@foreach($meals as $meal)
<div class="clearfix">

    <div class="img-container">
        <img src="{{ asset('img/'. $meal->title . '.jpg') }}" alt="biryani" style="width:80%">
    </div>
    <div class="img-container">
        <div>
            <nav class="rest_name">
                <span class="rest_title">{{$meal->title}}</span>
            </nav>
            <p class="rest_desc">{{$meal->description}}</p>
        </div>
    </div>
    <div class="img-container">
        <span class="cost">${{$meal->cost}}</span>


    </div>

    <div class="img-container">
        <td><a href="{{ url('/ConfirmOrder', $meal->id) }}">{{ $meal->make }}</a><td>
        <td><form method="get" action="{{ url('/Cart/' . $meal->id ) }}">
                {{ csrf_field() }}
                <input class="order_btn" style="height: 30px; width: 100px; background-color:#9affb0 " type="submit" value="Update" style="color: green"/>
            </form></td>


      <td><form method="post" action="{{ url('/Cart', $meal->id) }}">
            {{ csrf_field() }}
            {{ method_field('Delete') }}
              <input class="order_btn" style="height: 30px; width: 100px; background-color: #ff2f0d " type="submit" value="Delete"/>
        </form></td>
    </div>

</div>
@endforeach


<a href="/ordermeals" class="order_btn" style="height: 40px; width: 150px; " >Go Back</a>

<a href="/Payment" class="order_btn" style="height: 40px; width: 280px; " >Proceed to checkout</a>

</main>
<footer>

    <div class="row">
        <p class="footertext">Copyright &copy; 2022 PHP group</p>
    </div>

</footer>


</html>

