<!DOCTYPE html>
<html lang="en">
<?php
include ('../database.php')
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <nav class="TopNavBar">
        <div class="TopNav">
            <div class="logo">
                <img width="150px" src="../img/logo.png" alt="">
            </div>

            <div class="navRightContent">
                <?php
                $cookieValue = $_COOKIE["user"];
                if ($cookieValue == 'logout') {
                    echo "<a href='' class='SignIn'>Signin</a>";
                } else {
                    echo "Hello $cookieValue <form action='../PHP/logout.php' method='post'><button class='logout'> Logout </button></form>";

                }

                ?>

            </div>
        </div>
        <div class="ButtonNav"style="background-color:powderblue">

            <a href="#leftContact">Contact Us</a>

        </div>
    </nav>


    <div class="login-container">
        <h2>Login</h2>
        <p class="closeLogin LoginDisplayOff"> X </p>
        <form class="login-form" method='post' action='../PHP/loginUser.php'>
            <input type="text" placeholder="email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
            <p style="color: white;">Not Signin Yet ? <a style="color: white;" href="./signup.php">Signup Now</a></p>
        </form>
    </div>

    <div class="Content" style="background-color:powderblue">


        <div class="ContentSeprate" id='ContentSeprate'></div>

        <div class="MidContent">
            <div class="MidTop">
                <p>

                </p>
                <p>

                </p>

                </p>
            </div>

            <div class="MidCenter" id='midCenter'>

            </div>

            <div class="TopBottom">
                <div class="ButtomContent Content1">
                    <p>Roses</p>
                    <img class="PetsImg" id="Dog" width="90px"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVezLIKMbNiFbW8bxy_A4fY6HVRSFCzMSDzOHbD0W-yQ&s"
                        alt="">
                </div>
                <div class="ButtomContent Content2">
                    <p>Sunflower</p>
                    <img class="PetsImg" id="Cat" width="90px"
                        src="https://hips.hearstapps.com/hmg-prod/images/types-of-sunflowers-1646756873.jpg?crop=1xw:0.75xh;center,top&resize=1200:*"
                        alt="">
                </div>
                <div class="ButtomContent Content3">
                    <p>Lotus</p>
                    <img class="PetsImg" id="Other" width="90px"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST-LuINQSa_SDaMejnin6jKpJrGaS3MqSxXZn5T2NuEQ&s"
                        alt="">

                </div>

            </div>
        </div>



    </div>

    <footer>
        <p>

        </p>
        <p>
            Copyright @2021-2023
        </p>


    </footer>


    <div class="ContactPage"style="background-image:url(https://images.pexels.com/photos/158028/bellingrath-gardens-alabama-landscape-scenic-158028.jpeg?cs=srgb&dl=pexels-pixabay-158028.jpg&fm=jpg)">

        <div class="ContactContent">
            <h1>Ingit Gardening = LOVE & CARE Flowers</h1>
        </div>
        <h1 style="text-align: center;">Ingit Gardening</h1>

        <div class="ContactMidContent">

            <div class="LeftContact" id="leftContact">
                <h1> Service Form</h1>
                <form action="../PHP/contact.php" method="post">
                    <input type="text" placeholder="Email" name='Email' required>
                    <input type="text" placeholder="Phone Number" name="Messege" required>
                    <label for="service">Select Service:</label>
                    <select id="service" name="service" required>
                        <option value="" disabled selected>Select Service</option>
                        <option value="1">Garden Maintenance</option>
                        <option value="2">Landscape Design</option>
                        <option value="3">Planting Service</option>
                    </select>
                    <label for="bookingDate">Booking Date:</label>
                    <input type="date" id="bookingDate" name="bookingDate" required>

                    <label for="bookingTime">Booking Time:</label>
                    <input type="time" id="bookingTime" name="bookingTime" required>


                    <button> Send </button>
                </form>
            </div>
            <div class="SeprateContact"></div>


            <div class="RightContact">
                <div class="ContentContact">
                    <img src="../img/call.png" alt="">
                    <p>Tel : ************</p>
                </div>
                <div class="ContentContact">
                    <img src="../img/address.png" alt="">
                    <p>Address</p>
                </div>
                <div class="ContentContact">
                    <img src="../img/social media.png" alt="">
                    <p>Follow us on social media</p>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="../js/index.js"></script>

</html>