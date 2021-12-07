<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RedBank - Home</title>
        <link rel="stylesheet" href="./content/Main.css">
        <style>
            a:link, a:active, a:visited
              {
                background-color: black;
                color: white;
                text-decoration: none;
              }
            a:hover
              {
                background-color: darkslategray;
              } 
        </style>
    </head>
    <body>
        <div class="pTitle">Red Bank</div>
        <div class="login">
              <a href="./content/register.php">Register</a>
              <a href="./content/login.php" >Login</a>
        </div>
        <div class="main">
            <span> </span>
            <a href="./content/page1.html">About Us</a>
            <a href="./content/page2.html">Blood Banks</a>
            <a href="./content/page3.html">How to Donate</a>
            <a href="./content/page4.php">Contact Us</a>
        </div>
        <div class ="container">
            <div class ="gallery">
                <img src="./img/find.jpeg">
                  <a href="./content/findb.html"><div class="desc">FIND BLOOD</div></a>
            </div>

            <div class ="gallery">
                <img src="./img/reqt.jpg">
                   <a href="./content/reqtd.php"> <div class="desc">REQUEST DONOR</div></a>
            </div>

            <div class ="gallery">
                <img src="./img/donor.jpg">
                  <a href="./content/rdonor.php"> <div class="desc">BE A DONOR </div></a> 
            </div>
        </div>
    </body>
</html>