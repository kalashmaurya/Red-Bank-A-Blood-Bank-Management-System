<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="form.css">
</head>
<body>  
<div id="outside">
<form id="registration" action="ilogin.php" method="POST">
  <h1 id="title">Login</h1>
  <fieldset>
    <legend>Login Details</legend>
    <div>
     <div> <label id="name-label" for="name">Full Name:</label>
      <input type="text" required id="name" name="username" size= 30px placeholder="Enter name here" required>   </div>
     <div> <label id="email-label" for="Email">Email ID:</label>
      <input type="email" required id="email" name="email" size=30px placeholder="Enter email here" required>  </div>
    <div><label for="password">Password:</label>
    <input type="password" name="password" placeholder="Enter your password" required>  </div>
    </fieldset>
    <div id="submitbutton">
    <a href="../index.php"><button type="submit" id="submit">Login</button></a></div>
</form>
</div>
</body>
</html>