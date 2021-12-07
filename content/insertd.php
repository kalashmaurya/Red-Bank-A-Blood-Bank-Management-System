<?php
include('connection.php');
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$password = $_POST['password'];
$type = $_POST['type'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$previous = $_POST['previous'];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($useremail) || !empty($type) || !empty($previous) || !empty($age)) {

        $SELECT = "SELECT useremail From rdonor Where useremail = ? Limit 1";
        $INSERT = "INSERT Into rdonor (username, useremail, password, type, age, gender, previous) values(?, ?, ?, ?, ?, ?, ?)";
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
         $stmt->bind_param("ssssiss", $username, $useremail, $password, $type, $age, $gender, $previous);
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
