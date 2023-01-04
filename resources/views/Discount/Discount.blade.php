<!DOCTYPE html>
<html lang="en">
<head>
    <title>Canadian Spicy</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Home page" />
    <meta name="keywords" content=" Restaurants,tour,seacrh,food,career guide,trackorder"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/discount.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
</head>

<body>

<div class="container">
    <div class="row">

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">PHP Group</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="../Homepage">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ordermeals">Order food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../discount">Discount</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../reservation">Reservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../AboutUs">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ContactUs">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../careerPage">Career</a>
                </li>


                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link btn btn-danger text-white" type="button" href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>

    </nav>
</div>
<div class="container">
    <div class="select-options" id="select-options">
        <!-- order meals feature -->

        <div class="discountQuiz" >
            <h3>{{$dialog." ".$discount." ".$coupon}} </h3>
            <form method="post" action="/discount">
                @csrf
                    @foreach($discountQuestions as $discountQuestion)
                            <p>{{$discountQuestion->Question}}</p>
                            <input type="radio" id="{{$discountQuestion->OptionOne}}" name="{{$discountQuestion->QuestionId}}" value="{{$discountQuestion->OptionOne}}">
                            <label for="{{$discountQuestion->OptionOne}}">{{$discountQuestion->OptionOne}}</label><br>
                            <input type="radio" id="{{$discountQuestion->OptionTwo}}" name="{{$discountQuestion->QuestionId}}" value="{{$discountQuestion->OptionTwo}}">
                            <label for="{{$discountQuestion->OptionTwo}}">{{$discountQuestion->OptionTwo}}</label><br>
                            <input type="radio" id="{{$discountQuestion->OptionThree}}" name="{{$discountQuestion->QuestionId}}" value="{{$discountQuestion->OptionThree}}">
                            <label for="{{$discountQuestion->OptionThree}}">{{$discountQuestion->OptionThree}}</label><br>
                            <input type="radio" id="{{$discountQuestion->OptionFour}}" name="{{$discountQuestion->QuestionId}}" value="{{$discountQuestion->OptionFour}}">
                            <label for="{{$discountQuestion->OptionFour}}">{{$discountQuestion->OptionFour}}</label><br>
                   @endforeach
                <input type="submit" value="Submit">
            </form>

        </div>
        <br>


    </div>
</div>
<footer>

    <div class="row">
        <p class="footertext">Copyright &copy; 2022 PHP group</p>
    </div>

</footer>

</body>
</html>
