<!DOCTYPE html>
<head>
    <title>Career Page</title>
    <link rel="stylesheet" href="{{asset('css/CareerPageStyle.css')}}" />

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

<main id="main">
    @foreach($careerpage as $career)
    <div class="info">
        <h3 id="rcorners">{{$career->Desc_1}}</h3>
        <p >{{$career->Desc_2}}
            {{--When you think of jobs in the food industry, what first comes to mind?
            Probably roles like restaurant manager, bartender, barista, server,
            sous chef, and so on.--}}
        </p>
        <h3 id="rcorners">{{$career->Desc_3}}{{--Different Food career options--}}</h3>
        <p>{{$career->Desc_4}}
            {{--There are various other various career Opportunities in the food
            industry other than just being a chef or a bartender.<br />
            Please click on the following links to explore various new fields.
--}}
        </p>
        <!-- navigate to different pages for info on career paths -->
        <nav>
            <!-- display career links -->

            <a
                href="https://en.wikipedia.org/wiki/Craft_brewery_and_microbrewery"
                target="_blank"
            >Craft Brewer</a
            >
            <a
                href="http://www.wafarmersmarkettoolkit.org/chapter-4/managers/#:~:text=The%20Market%20Manager%20is%20a,opportunities%2C%20and%20market%20managers%20compensation."
                target="_blank"
            >Farmers' Market Manager</a
            >
            <a
                href="https://www.food-lawyers.net/#:~:text=Food%20lawyers%20offer%20more%20than,cooperation%20with%20the%20food%20sector."
                target="_blank"
            >Food Lawyer</a
            >
            <a
                href="https://www.theartcareerproject.com/careers/food-styling/"
                target="_blank"
            >Food Stylist</a
            >
            <a
                href="https://en.wikipedia.org/wiki/Health_coaching"
                target="_blank"
            >Holistic Health Coach</a
            >
            <a
                href="https://en.wikipedia.org/wiki/Molecular_gastronomy"
                target="_blank"
            >Molecular Gastronomist</a
            >
            <a
                href="https://en.wikipedia.org/wiki/Mycology#:~:text=Mycology%20is%20the%20branch%20of,such%20as%20toxicity%20or%20infection."
                target="_blank"
            >Mycologist</a>


        </nav>
        <h3 id="rcorners">{{$career->Desc_5}}</h3>
        <p>{{$career->Desc_6}}
            {{--Apply to various jobs in our restaurant please contact us.<br />The
            details are available in contact us section.--}}
        </p>

        <div>
            <h3 id="rcorners"> {{$career->Desc_7}}{{--Benefits, Rewards and Recognition--}} </h3>
            <p>{{$career->Desc_8}}
               {{-- Crew and restaurant managers are eligible for a wide range of benefits and awards. We offer competitive starting rates plus regular wage
                and performance reviews to promote skills growth and earning power. We also offer benefits and perks ranging from free uniforms, employee discounts, scholarships,
                incentives, and more.--}}</p>
        </div>
    </div>
    <!--   <div class="sidenav">
         <a href="../HomePage/HomePage.html">Home</a>
         <a href="../foodOrder/pages/mealOrder.html">Order food</a>
         <a href="../foodOrder/pages/orderTracking.html">Track order</a>
         <a href="../AboutUs/pages/AboutUs.html">About us</a>
         <a href="../ContactUs/pages/ContactUs.html">Contact us</a>
         <div
           id="logout"
           class="logout"
           onclick="window.location.href='../Logout/Logout.html'"
         >
           Log out
         </div>
       </div>-->
    </nav>
    @endforeach
</main>
<footer>
    <span class="copyright_text">Copyright &copy; 2021 Canadian Spicy</span>
</footer>

</html>
