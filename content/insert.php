<?php
include('connection.php');
$username = $_POST['username'];
$uaddress = $_POST['uaddress'];
$useremail = $_POST['useremail'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$password = $_POST['password'];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($useremail) || !empty($contact) || !empty($uaddress) || !empty($age)) {

        $SELECT = "SELECT useremail From register Where useremail = ? Limit 1";
        $INSERT = "INSERT Into register (username, uaddress, useremail, contact, gender, age, password) values(?, ?, ?, ?, ?, ?, ?)";
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
         $stmt->bind_param("sssdsis", $username, $uaddress, $useremail, $contact, $gender, $age, $password);
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