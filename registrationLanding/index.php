<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Caveat|Cinzel|Dancing+Script|Syncopate|Emblema+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Registration Landing</title>
</head>
<body>
    <div class="container">
            <div id="btnBox">
                    <div class="btnTop"></div>
                    <div class="btnMid"></div>
                    <div class="btnBottom"></div>
                    <div class="btnHide"></div>
                    <div class="btnClose">X</div>
            </div>
            <nav class="navSide">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">List of Services</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Join Our Crew</a></li>
                    </ul>
            </nav>
            <div class="hero">
                    <div class="bgImg">
                            <div class="logoWrap"><h1 class="logo">E<i class="fas fa-tree"></i>G</h1></div>
                            <h1 class="CTA"><span>EverGreen</span><br> Lawn and Landscape</h1><h3 class="catchy">You work hard, We'll handle the yard.</h3><hr>
                            <p>Here at EverGreen, our friendly and knowledgeable staff can handle all of your needs, from typical cutting and maintenance, to custom tailored landscapes, and everything in between.</p>
                            
                    </div>
                    <div class="heroText">
        
                    </div>
                </div>

                </div>
                <div class="formWrap">
    <form action="signup.inc.php" method="POST">
        <h1 class="signUp">Register for a <span>FREE</span> Estimate!</h1>
        
        <label for="">First Name</label>
        <input type="text" name="firstName" onkeyup="this.value = this.value.replace(/[^a-z]/, '')"><br>
        
        <label for="">Last Name</label>
        <input type="text" name="lastName" onkeyup="this.value = this.value.replace(/[^a-z]/, '')"><br>
        
        <label for="">E-mail Address</label>
        <input type="email" name="email"><br>
        
        <label for="">Phone Number</label>
        <input type="number" name="phoneNum"><br>
                
        <label for="">Choose Password</label>
        <select name="whenToCall" id="bestTime" class="bestTime">
            <option value="Morning">Morning</option>
            <option value="Afternoon">Afternoon</option>
            <option value="Evening">Evening</option>
        </select>
        <!-- <input type="password" name="password"><br> -->
        
        <button class="formBtn" name="estimateBtn" type="submit">Request Estimate!</button>

    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullUrl, "error=emptyfields") == true) {
        echo "<p class='error'>Please Complete ALL fields!<p>";
    }
    else if (strpos($fullUrl, "error=invalidmail") == true) {
        echo "<p class='error'>Please Enter Valid Email!<p>";
    }
    else if (strpos($fullUrl, "error=usernametaken") == true) {
        echo "<p class='error'>Sorry, this name has already been Registered!<p>";
    }
    else if (strpos($fullUrl, "error=invalidphonenum") == true) {
        echo "<p class='error'>Please Enter Valid Phone Number!<p>";
    } 
    else if (strpos($fullUrl, "signup=success") == true) {
        echo "<p class='registered'>You Have Been Registered Successfully!<p>";
    } 
    else {
        
        
    }
    ?>
    </form>
</div>
        <div class="content">
            <div class="maintenance">
                <h1 class="maintenanceTitle">Lawn Maintenance</h1>
                <img src="http://stjosephfamilycenter.org/wp-content/uploads/2019/06/best-commercial-mower-landscapers-and-lawn-care-professionals-know-that-even-the-push-or-walk-behind-just-wont-cut-it-when-comes-to-mowing-used-ztr-mowers-for-sale-near-me-com.jpg" alt="">
                <div class="maintenanceText">
                <p class="maintenanceText1">EverGreen’s professionally trained staff has years of experience providing high quality lawn maintenance, guaranteeing professional grade service every time.</p>
                <p class="maintenanceText2">Our routine maintenace service includes cutting, weed-eating, and edging, always followed up with blowing trimmings and debris from walkways and driving surfaces. We offer additional maintenace services such as hedge trimming and gutter cleaning among others.</p>
                </div>
            </div>
            <div class="turf">
                <h1 class="turfTitle">Turf Management</h1>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_AkrQdBl1bNlQu0fjndagR2NFZc7_--8dIBp6l1yoX-CWQjjzEQ" alt="">
                <div class="turfText">
                <p class="turfText1">Turf Management is essential in ensuring your property looks it's best.  Sod and plant health can “Make or Break” the appearance of your home and affect its value. </p>
                <p class="turfText2">Sod and turf can be very tricky, but also incredible when done correctly. There are many things to consider in order to make the best decisions for your lawn. With EverGreen, you’ll have the assurance that your lawn will be treated properly with quality materials by local lawn care professionals who really care about you and your lawn.</p>
                </div>
            </div>
            <div class="landscaping">
                <h1 class="landscapingTitle">Landscaping</h1>
                <img src="data:image/jpeg;base64,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" alt="">
                <div class="landscapingText">
                <p class="landscapingText1">EverGreen and its professional staff have the vision, equipment, and expertise to make your outdoors come to life. From design to install to maintenance we have what it takes to make your outdoor experience beautiful and relaxing.</p>
                <p class="landscapingText2">Our landscape designer will design your dreams. Then, our timely efficient install crews will make it happen, while our maintenance crews will ensure that your landscapes are maintained to the highest standard for years of beauty and enjoyment.</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="col1">
                <h1>Contact Us</h1><hr>
                <p>(205)718-0383<br>
                    info@EverGreenLawn.com<br>
                    1234 Nature Tr <br>
                    Alabaster, AL 35007                    
                </p>
            </div>
            <div class="col2">
                <h1>Connect With Us</h1><hr>
                <p>
                    <i id="fbIcon" class="fab fa-facebook fa-2x "></i>
                    <i id="twitterIcon" class="fab fa-twitter fa-2x "></i>
                </p>
            </div>
            <div class="col3">
                <h1>Navigation</h1><hr>
                    <nav class="navFoot">
                              <a href="#">Home |</a>
                              <a href="#">List of Services |</a>
                              <a href="#">About |</a>
                              <a href="#">Contact Us |</a>
                              <a href="#">Join Our Crew</a>
                              <div class="search-box">
                                  <input type="text" name="" placeholder=" Type to search">
                                  <a href="#" class="searchBtn"><i class="fas fa-search fa "></i></a>
                              </div>
                            </ul>
                    </nav>
            </div>
        </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
      <script src="main.js"></script> 
</body>
</html>