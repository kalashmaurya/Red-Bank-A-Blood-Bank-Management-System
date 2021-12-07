<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $email = $_POST['email'];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password); 
        $email = stripcslashes($email);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        $email = mysqli_real_escape_string($con, $email);  
      
        $sql = "select * from login where username = '$username' and password = '$password' and email = '$email'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location:../index.php");
            exit;
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  