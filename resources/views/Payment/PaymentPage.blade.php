<!DOCTYPE html>
<head>
    <title>Payment Form</title>
    <link rel="stylesheet" href="{{asset('css/PaymentPage.css')}}" />

    <meta charset="UTF-8">
    <meta name="description" content="Meal ordering page">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/HomePageStyle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
</head>

<header class="header_wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">Canadian Spicy Restaurant </a>
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
{{--@if ($errors->any())
    @foreach ($errors->all() as $error)
        --}}{{--<span class="text-danger">{{$error}}</span><br>--}}{{--
    @endforeach
@endif--}}
<body>
<form action="/Payment" method="POST">
    @csrf
    <div class="row">
        <div class="col-75">
            <div class="container">

                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" >
                        @error('firstname')
                            <span class="text-danger">{{$message}}</span><br>
                        @enderror
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email"  >
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" >
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" >
                        @error('city')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state">
                                @error('state')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip">
                                @error('zip')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" >
                        @error('cardname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" >
                        @error('cardname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" >
                        @error('expmonth')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" >
                                @error('expyear')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" >
                                @error('cvv')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                {{--  <a href="/Payment" type="submit" value="Continue to checkout" class="btn">
                  </a>--}}
                <button type="submit" name="PaymentCheckout" class="button button4" id="btn-submit" > Payment checkout</button>

            </div>
        </div>

    </div>
</form>

</body>
<footer>
    <span class="copyright_text">Copyright &copy; 2021 Canadian Spicy</span>
</footer>

</html>

