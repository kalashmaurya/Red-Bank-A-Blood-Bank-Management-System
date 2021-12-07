<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Request Donor</title>
        <link rel="stylesheet" href="Main.css">
        <link rel="stylesheet" href="form.css">
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
              <a href="register.php" target="_blank">Register</a>
              <a href="login.php" target="_blank">Login</a>
        </div>
        <div class="main">
            <span></span>
            <a href="../index.php">Home</a>
            <a href="page2.html">Blood Banks</a>
            <a href="page3.html">How to Donate</a>
            <a href="page4.php">Contact Us</a>
        </div>
        <div id="outside">
            <form id="registration" action="ireqt.php" method="POST">
              <h2 id="title">Request Donor</h2>
              <div id="description"><b>Note:</b> Fill out order details</div>
              <fieldset>
                <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
                <legend>Account Details</legend>
                <!-- formally describes the purpose of the fieldset it is included inside. -->
                <div>
                  <label id="name-label" for="name">Full Name:</label>
                  <input type="text" required id="name" name="username" size= 30px placeholder="Enter name here" required>   </div>
                  <div>
                  <label id="email-label" for="Email">Email ID:</label>
                  <input type="email" required id="email" name="useremail" size=30px placeholder="Enter email here" required>  </div>
                  <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter password" required>  </div>
                </fieldset>
                <fieldset>
                <legend>Order Details</legend>
                <div>
                  <label for="type-label">Blood Type:</label>
                  <input type="text" name="type" placeholder="A plus" required> </div>
                <div>
                <label for="location-label">Location:</label>
                <input type="text" name="location" placeholder="City, State" required> </div>
                <div>
                    <label for="hospital-label">Hospital Name:</label>
                    <input type="text" name="hospital" required> </div>
                <div>
                <label for="subject">Mention Reason for request:</label><br>
                <textarea id="subject" name="subject" style="height:80px"></textarea>
                </div>
            </fieldset>
              <div id="submitbutton">
                <button type="submit" id="submit">Submit</button>   </div>
             </form>
              </div>
            </body>
            </html>