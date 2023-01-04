<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{asset('css/ContactUs.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
    <meta charset="UTF-8" />
    <meta name="description" content="Home page" />
    <meta name="keywords" content=" Restaurants,tour,seacrh,food,career guide,trackorder"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
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
            </ul>
        </div>

    </nav>
</div>
<div class="container">
    <div class="select-options" id="select-options">
        <div style="min-height:100vh; display:flex; flex-direction:column;
            justify-content:space-between;">
            <main>
                <h2>Please Give Us Your Infomration</h2>
                <form name="conForm" method="post" action="contactus.php">
                    <fieldset>
                        <legend><b>We want to Best Serve Our Customers</b></legend>
                        <p>
                            Please Fill Out the Following so we can best Customize this User
                            Experience Just For You!!
                        </p>
                        <label for="Fname">First Name</label> <br />
                        <input type="text" id="Fname" name="FName" /><span>*</span
                        ><br /><br />
                        <label for="Lname"> Last Name</label> <br />
                        <input type="text" id="Lname" name="LName" /><span>*</span
                        ><br /><br />
                        <label for="PhoneNum">Phone Number</label><br />
                        <input type="text" id="PhoneNum" name="number" /><br /><br />
                        <label for="EmailAdd">Email Address</label><br />
                        <input
                            type="text"
                            id="EmailAdd"
                            name="Emailadd"
                            required
                        /><span></span><br /><br />
                        <label>Please enter your question or comment below:</label>
                        <textarea id="comment" name="comment"> </textarea><br /><br />
                        <input type="submit" name="contactformsubmit" /><br />
                    </fieldset>
                    <span id="pFormat">We can also be contacted by Social Media</span>
                    <img src="{{ asset('img/facebook.png') }}" alt="combo3" style="width:100%">
                    <img src="{{ asset('img/twitter.png') }}" alt="combo3" style="width:100%">
                    <img src="{{ asset('img/google.png.jpg') }}" alt="combo3" style="width:100%">
                </form>
            </main>
            <footer>

                <div class="row">

                    <p class="footertext">Copyright &copy; 2022 PHP group</p>
                </div>
            </footer>
        </div>
    </div>
</div>



</body>

</html>
