
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
    <link rel="stylesheet" href="HomePageStyle.css" />
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
                    <a class="nav-link" href="../Homepage/homepage1.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../discount/discount.html">Discount</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ContactUSReservationsAcctDetails/reservation.html">Reservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../AboutUs">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ContactUSReservationsAcctDetails/ContactUs.html">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../careerPage/CareerPage.html">Career</a>
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
</div>
<div class="container">
<div class="select-options" id="select-options">
    <!-- order meals feature -->

    <div class="orderfood" >
        <div class="row">
            <div class="col-sm-6">
        <img class="foodimage" alt="food image" src="./Images/burger.jpg" />
            </div>
            <div class="col-sm-6">
                <div class="ordertext">
                 <h2 style="margin-top: 20px;">Hungry? Order delicous food online.</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- discount section -->
    <div class="discount">
        <div class="row">
            <div class="col-sm-6">
        <div class="discounttext">
            <h2 style="margin-top: 20px;" >Know about today's special offers</h2>
        </div>
            </div>
            <div class="col-sm-6">
        <img class="discount-image" alt="discount image" src="Images/dis.jpg"/>
            </div>
        </div>
    </div>

    <!-- track your order component -->
    <div class="track" >
        <div class="row">
            <div class="col-sm-6">
        <img class="trackImage" alt="track icon" src="./Images/delivery.jpg" />
            </div>
            <div class="col-sm-6">
        <div class="trackordertext">
            <h2 style="margin-top: 20px;">Track the status of your order</h2>
        </div>
        </div>
    </div>
    </div>
    <!-- navigate to career page on click -->
    <div class="career" >
        <div class="row">
            <div class="col-sm-6">
        <div class="careertext">
            <h2 style="margin-top: 20px;">Various career oppurtunities in food industry</h2>
        </div>
            </div>
            <div class="col-sm-6">
        <img class="careerImage" alt="careerguide icon" src="Images/car1.jpg"/>
            </div>
        </div>
    </div>
</div>
</div>
<footer>

        <div class="row">
            <p class="footertext">Copyright &copy; 2022 PHP group</p>
        </div>

</footer>

</body>
