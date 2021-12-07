<?php
include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$city = $_POST['city'];
$contact = $_POST['contact'];
$subj = $_POST['subj'];

if (!empty($fname) || !empty($lname) || !empty($city) || !empty($contact) || !empty($email) || !empty($subj)) {
    
        $SELECT = "SELECT email From contactus Where email = ? Limit 1";
        $INSERT = "INSERT Into contactus (fname, lname, city, contact, email, subj) values(?, ?, ?, ?, ?, ?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param("sssiss", $fname, $lname, $city, $contact, $email, $subj);
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