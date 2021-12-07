<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link rel="stylesheet" href="form.css">
</head>
<body>  
<div id="outside">
<form id="registration" action="insert.php" method="POST">
  <h1 id="title">Register Now</h1>
  <p id="description"><b>Note:</b> Fill out all the details to make an account.</p>
  <fieldset>
    <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
    <legend>Account Details</legend>
    <!-- formally describes the purpose of the fieldset it is included inside. -->
    <div>
      <label id="name-label" for="name">Full Name:</label>
      <input type="text" required id="name" name="username" size= 30px placeholder="Enter name here" required>   </div>
    <div>
      <label for="address-label">Residential Address:</label>
      <input type="text" id="address" name="uaddress" size=70px placeholder="Enter address here" required>   </div>
    <div>
      <label id="email-label" for="Email">Email ID:</label>
      <input type="email" required id="email" name="useremail" size=30px placeholder="Enter email here" required>  </div>
    <div>
      <label id="number-label" for="phone">Contact No:</label>
      <input type="number" id="number" name="contact" placeholder="Enter 10 digit number" max="9999999999" required> </div>
    <div>
      <label for="Gender">Gender:</label>
       <p> 
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
      </p>
    </div>
    <div>
    <label for="age-label">Age:</label>
    <input type="number" name="age" min="16" required> </div>
    <div>
    <label for="password">New Password:</label>
    <input type="password" name="password" placeholder="atleast 6 characters long" required>  </div>
  </fieldset>
  <div id="submitbutton">
    <button type="submit" id="submit">Submit</button>   </div>
 </form>
  </div>
</body>
</html>