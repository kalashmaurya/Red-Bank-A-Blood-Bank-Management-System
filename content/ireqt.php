<?php
include('connection.php');
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$password = $_POST['password'];
$type = $_POST['type'];
$location = $_POST['location'];
$hospital = $_POST['hospital'];
$subject = $_POST['subject'];

if (!empty($username) || !empty($password) || !empty($location) || !empty($useremail) || !empty($type) || !empty($hospital) || !empty($subject)) {
    
        $SELECT = "SELECT useremail From reqtd Where useremail = ? Limit 1";
        $INSERT = "INSERT Into reqtd (username, useremail, password, type, location, hospital, subject) values(?, ?, ?, ?, ?, ?, ?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $useremail);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param("sssssss", $username, $useremail, $password, $type, $location, $hospital, $subject);
         $stmt->execute();
         header("location:../index.php");
            exit;
        } else {
         echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
   } else {
    echo "All fields are required";
    die();
   }
?>