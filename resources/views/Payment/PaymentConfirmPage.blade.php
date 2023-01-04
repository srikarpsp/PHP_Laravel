<!DOCTYPE html>
<head>
    <title>Customer Review</title>
    <link rel="stylesheet" href="{{asset('css/PaymentConfirmPage.css')}}" />

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

<header class="header_wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning ">
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
<body>


<h2></h2>
@foreach ($paymentlist as $p)
    @csrf
 {{--   <tr>
    <td>{{ $p->FullName }} </td>
    <td>{{ $p->email }} </td>
        </tr>--}}

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-left logo p-2 px-5"><img src="{{ asset('img/favicon.png') }}" alt="combo1" style="width:10%; height: 10%"> </div>
                    <div class="invoice p-5">
                        <h1>Your Order Confirmed! </h1>
                        <span class="font-weight-bold d-block mt-4">Hello,{{ $p->FullName }} </span> <span>You order has been confirmed please sit back and wait for your meal</span>
                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span>14 Dec,2022</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order No</span> <span> ORDR3456</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Payment Card Details</span> {{ $p->CreditCardNumber }} </div>
                                    </td>
                                    <td>
                                        <br class="py-2"> <span class="d-block text-muted">Shipping Address</span>{{ $p->Address}}, {{ $p->City }}, {{ $p->State }},{{ $p->Zip}} </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>

                                    <td width="20%"> <img src="{{ asset('img/biryani.jpg') }}" alt="biryani" style="width:200%"> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>  </td>
                                    <td width="60%"> <span class="font-weight-bold">Biryani</span>
                                        <div class="product-qty"> <span class="d-block">Quantity:1</span> </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">$14</span> </div>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-5">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Subtotal</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>$14.50</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>$5</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Tax Fee</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>$2.30</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Discount</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="text-success">$5.30</span> </div>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Subtotal</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="font-weight-bold">$15.30</span> </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>We will send a notification when the delivery is less than 5mins</p>
                        <p class="font-weight-bold mb-0">Thanks for order with us!</p> <span>Canada Spicy Team</span>
                    </div>
                    <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> Contact Us</a></span> <span>14 Dec, 2022</span> </div>
                </div>
            </div>
        </div>

 <form method="post" action={{url('Payment', $p->id)}} >
     @csrf
     @method('DELETE')
     <button type="submit" name="delete" class="button button4" id="btn-submit" > Cancel the Order</button>
 </form>

 <a href="/Payment/{{$p->id}}/edit" class="button button4" >Cancel and update payment details</a>
    </div>




@endforeach
<footer>
    <span class="copyright_text">Copyright &copy; 2021 Canadian Spicy</span>
</footer>

</body>
</html>

