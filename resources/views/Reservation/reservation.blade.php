<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservation Page</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{asset('css/reservation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
    <meta charset="UTF-8" />
    <meta name="description" content="Home page" />
    <meta name="keywords" content=" Restaurants,tour,seacrh,food,career guide,trackorder"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head><div class="container">
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
                    <a class="nav-link" href="../HomePage">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ordermeals">Order Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Discount">Discount</a>
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
</div>
<div class="container">
    <div class="select-options" id="select-options">
        <div style="min-height:100vh; display:flex; flex-direction:column;
            justify-content:space-between;">

            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 borde1r-right">
                    </div>
                    <main class="main_wrapper">
                        <div id="rest_wrapper">
                            <div class="res_holder">
                                <div class="img_holder">
                                    <img alt="FirstFloor" src="imagesCD/FirstFloor.jpg"/>
                                </div>
                                <div class="rest_info_holder">
                                    <nav class="rest_name">
                            <span class="rest_title">First Floor</a>
                            </span>
                                    </nav>
                                    <p class="rest_desc">First Floor Seats For Families</p>
                                    <span class="cost">$20</span>
                                    <span class="description">Multiple Seats and Easy for Families</span>
                                    <input type="submit" name="FirstFloor" class="reserve_btn" value="Reserve" >
                                </div>
                            </div>
                            <div class="res_holder">
                                <div class="img_holder">
                                    <img alt="SecondFloor" src="imagesCD/SecondFloor.jpg"/>
                                </div>
                                <div class="rest_info_holder">
                                    <nav class="rest_name">
                            <span class="rest_title">Second Floor</a>
                            </span>
                                    </nav>
                                    <p class="rest_desc">Second Floor Seats for Couples</p>
                                    <span class="cost">$30</span>
                                    <span class="description">Seating focused on Couples.</span>
                                    <input type="submit" name="SecondFloor" class="reserve_btn" value="Reserve" >
                                </div>
                            </div>
                            <div class="res_holder">
                                <div class="img_holder">
                                    <img alt="upstairs" src="imagesCD/UpStairs.jpg"/>
                                </div>
                                <div class="rest_info_holder">
                                    <nav class="rest_name">
                            <span class="rest_title">Roof Seats</a>
                            </span>
                                    </nav>
                                    <p class="rest_desc">The Roof Seats</p>
                                    <span class="cost">$20</span>
                                    <span class="description">Enjoy the Upstairs part with Fantastic View</span>
                                    <input type="submit" name="upstairs" class="reserve_btn" value="Reserve" >
                                </div>
                            </div>
                            <div class="res_holder">
                                <div class="img_holder">
                                    <img alt="OutSide" src="imagesCD/OutSide.jpg"/>
                                </div>
                                <div class="rest_info_holder">
                                    <nav class="rest_name">
                            <span class="rest_title">OutSide</a>
                            </span>
                                    </nav>
                                    <p class="rest_desc">Outside Seats</p>
                                    <span class="cost">$5</span>
                                    <span class="description">Open Seats for Just Outside, Open only 9AM to 7PM</span>
                                    <input type="submit" name="OutSide" class="reserve_btn" value="Reserve" >
                                </div>
                            </div>
                            <div class="res_holder">
                                <div class="img_holder">
                                    <img alt="VIP1" src="imagesCD/VIP1.jpg"/>
                                </div>
                                <div class="rest_info_holder">
                                    <nav class="rest_name">
                            <span class="rest_title">VIP Section 1</a>
                            </span>
                                    </nav>
                                    <p class="rest_desc">VIP Section First Floor</p>
                                    <span class="cost">$50</span>
                                    <span class="description">5 Star Priority Treatment for First Floor</span>
                                    <input type="submit" name="VIP1" class="reserve_btn" value="Reserve" >
                                </div>
                            </div>
                            <div class="res_holder">
                                <div class="img_holder">
                                    <img alt="VIP2" src="imagesCD/VIP2.jpg"/>
                                </div>
                                <div class="rest_info_holder">
                                    <nav class="rest_name">
                            <span class="rest_title">VIP Section 2</a>
                            </span>
                                    </nav>
                                    <p class="rest_desc">VIP Section Second Floor</p>
                                    <span class="cost">$100</span>
                                    <span class="description">5 Star Priority Treatment for Second Floor</span>
                                    <input type="submit" name="VIP2" class="reserve_btn" value="Reserve" >
                                </div>
                            </div>
                        </div>

                        </form>
                    </main>
                    <footer>

                        <div class="row">

                            <p class="footertext">Copyright &copy; 2022 PHP group</p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
