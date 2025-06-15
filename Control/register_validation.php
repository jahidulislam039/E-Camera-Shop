<?php
$name = $email = $password = $dob = $gender = "";
$nameErr = $emailErr = $passErr = $dobErr = $genderErr = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hasError = false;


    if (empty($_POST["cname"])) {
        $nameErr = "Full Name is required";
        $hasError = true;
    } else {
        $name = htmlspecialchars($_POST["cname"]);
    }


    if (empty($_POST["cemail"])) {
        $emailErr = "Email is required";
        $hasError = true;
    } elseif (!filter_var($_POST["cemail"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $hasError = true;
    } else {
        $email = htmlspecialchars($_POST["cemail"]);
    }


    if (empty($_POST["cpassword"])) {
        $passErr = "Password is required";
        $hasError = true;
    } else {
        $password = $_POST["cpassword"];
    }


    if (empty($_POST["cDOB"])) {
        $dobErr = "Date of Birth is required";
        $hasError = true;
    } else {
        $dob = $_POST["cDOB"];
    }


    if (empty($_POST["cgender"])) {
        $genderErr = "Gender is required";
        $hasError = true;
    } else {
        $gender = $_POST["cgender"];
    }


    if (!$hasError) {
        $success = "Registration Successful!";

    }
}
?>
