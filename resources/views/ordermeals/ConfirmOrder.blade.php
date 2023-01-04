<!DOCTYPE html>
<head>
    <title>ConfirmOrder</title>
    <link rel="stylesheet" href="{{asset('css/ConfirmOrder.css')}}" />
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


<div style="display: flex; justify-content: center; align-items: center; height: 80vh; margin-top: 10%; margin-bottom:10%">
    <div style="max-width: 40vw">
        <form method="post" action="/ConfirmOrder" >
            @csrf
            <div class="res_holder">
                <div class="img_holder">
                    <img src="{{ asset('img/'. $meal->title . '.jpg') }}" alt=" " style="width:100%">
                </div>
                <div  class="rest_info_holder">
                    <div >
                        <nav class="rest_name">
                            <span class="rest_title" >{{$meal->title}}</span>
                            <input type="hidden" name="title" value="{{$meal->title}}"/>
                        </nav>
                        <p class="rest_desc" name="description" >{{$meal->description}}</p>
                        <span class="cost" name="cost" >Price: ${{$meal->cost}}</span>
                        <input type="hidden" name="description" value="{{$meal->description}}"/>
                        <input type="hidden"  name="cost" value="{{$meal->cost}}"/>
                        <span class="payment" >{{$meal->long_description}}</span>
                    </div>


                    <div style="margin-bottom: 10px">
                        <label class="rest_desc">Select your spice level: </label></br>
                        <select class="rest_desc" name="spice">
                            <option value="mild">Mild</option>
                            <option value="little">Little</option>
                            <option value="hot">Hot</option>
                            <option value="extreme">Extreme</option>
                        </select> </br></br>
                        <label class="rest_desc" name="size" >Size of the meal</label> <span id="information"></span> </br>
                        <input type="radio" name="info" value="1"> <label class="rest_desc" > Small </label>
                        <input type="radio" name="info" value="2"> <label class="rest_desc" > Regular </label>
                        <input type="radio" name="info" value="3"> <label class="rest_desc" > large </label>
                        </br></br>

                        <label class="rest_desc">Special instructions for the dish</label> <span id="issues" ></span>
                        <textarea class="rest_desc" rows="2" cols="32" id="issues" name="instructions" > </textarea>

                        <button class="rest_desc" type="submit" name="submit" value="Send Feedback" id="submitId" /> Add to cart </button>
                    </div>

                </div>

                <a href="/ordermeals" class="order_btn" style="height: 40px; width: 200px; " >Go Back</a>

            </div>


        </form>
    </div>
</div>
<footer>

    <div class="row">
        <p class="footertext">Copyright &copy; 2022 PHP group</p>
    </div>

</footer>
</body>
