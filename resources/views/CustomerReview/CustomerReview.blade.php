<!DOCTYPE html>
<head>
    <title>Customer Review</title>
    <link rel="stylesheet" href="{{asset('css/CustomerReview.css')}}" />

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

                <li class="nav-item">    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link btn btn-danger text-white" type="button" href="route('logout')"
                           onclick="event.preventDefault();
                           this.closest('form').submit();"> {{ __('Log Out') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>


</header>
<main id="main">
<form action="/CustomerReview" method="POST">
    {{csrf_field()}}
        <div class = "container" style="background-image: url('{{ asset('img/pngegg.png')}}');">

            <h1 style="color:white">Customer Satisfaction Survey</h1> </br>
<h4>Please take a few movements to complete this survey to give us valuable </br>
    feedback
    on our services. Thank you.</h4> </br>


           <label>Name: </label>
            <input type="text" name="fname" id="fname"/><span id="fname"></span></br>
            @error('fname')
            <span class="text-danger">{{$message}}</span><br>
            @enderror
           <label> Email:  </label>
            <input type="text" name="email" id="email"/><span id="email"></span></br>
            @error('email')
            <span class="text-danger">{{$message}}</span><br>
            @enderror
           <label>Contact:</label>
            <input type="text" name="contact" id="contact"/><span id="contact"></span> </br></br>
            @error('contact')
            <span class="text-danger">{{$message}}</span><br>
            @enderror

        <div>
            <label>Which food you liked the most?</label> <span id="food"></span></br></br>
            <input type="radio" name="rate" value="Biryani"> Biryani</br>
            <input type="radio" name="rate" value="Burger"> Burger</br>
            <input type="radio" name="rate" value="Salad"> Salad</br>
            <input type="radio" name="rate" value="Spheggeti"> Spheggeti</br>
            <input type="radio" name="rate" value="Pizza"> Pizza</br></br>
            @error('rate')
            <span class="text-danger">{{$message}}</span><br>
            @enderror

        </div>
        <div>
            <label>How much did you enjoyed our food and services?</label></br>
            <select id="satisfaction" name="satisfaction">
                <option value = "Satisfied">Satisfied</option>
                <option value ="Not Satisfied">Not Satisfied</option> </select>
            @error('satisfaction')
            <span class="text-danger">{{$message}}</span><br>
            @enderror

        </div>

        <div>
            </br></br><label>Will you recommend our website to your friends</label>
            <span id="website"></span></br>
            <input name="recom" type="checkbox" value="y" name="y">YES</br>
            <input name="recom"type="checkbox" value="n" name="n">NO</br></br>
            @error('recom')
            <span class="text-danger">{{$message}}</span><br>
            @enderror
            <label>How easy is it to find our information on the site</label> <span id="information"></span> </br></br>
            <input type="radio" name="info" value="1"> 1
            <input type="radio" name="info" value="2"> 2
            <input type="radio" name="info" value="3"> 3
            <input type="radio" name="info" value="4"> 4
            <input type="radio" name="info" value="5"> 5
            </br></br>
            @error('info')
            <span class="text-danger">{{$message}}</span><br>
            @enderror
        </div>
            <label>What kind of Issues can we help with?</label> <span id="issues" ></span></br></br>
            <textarea rows="4" cols="35" id="issues" name="comment" > </textarea></br>



        <button type="submit" name="submit" value="Send Feedback" id="submitId" style="background-color: green; color: white;"/> Submit </button>
        </div>


</form>
    </main>

<footer>
    <span class="copyright_text">Copyright &copy; 2021 Canadian Spicy</span>
</footer>
</body>
</html>
