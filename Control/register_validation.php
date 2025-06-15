<?php
include("../model/db.php");

$name = $email = $password = $dob = $gender = "";
$nameErr = $emailErr = $passErr = $dobErr = $genderErr = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hasError = false;

    // Name validation
    if (empty($_POST["cname"])) {
        $nameErr = "Full Name is required";
        $hasError = true;
    } else {
        $name = $conn->real_escape_string(htmlspecialchars(trim($_POST["cname"])));
    }

    // Email validation
    if (empty($_POST["cemail"])) {
        $emailErr = "Email is required";
        $hasError = true;
    } elseif (!filter_var($_POST["cemail"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $hasError = true;
    } else {
        $email = $conn->real_escape_string(htmlspecialchars(trim($_POST["cemail"])));
        // Check if email already exists
        $checkEmail = $conn->query("SELECT id FROM customer WHERE email='$email'");
        if ($checkEmail && $checkEmail->num_rows > 0) {
            $emailErr = "Email already registered";
            $hasError = true;
        }
    }

    // Password validation
    if (empty($_POST["cpassword"]) || strlen(trim($_POST["cpassword"])) < 6) {
        $passErr = "Password must be at least 6 characters";
        $hasError = true;
    } else {
        $password = password_hash(trim($_POST["cpassword"]), PASSWORD_DEFAULT);
    }

    // DOB validation
    if (empty($_POST["cDOB"])) {
        $dobErr = "Date of Birth is required";
        $hasError = true;
    } else {
        $dob = $conn->real_escape_string(htmlspecialchars(trim($_POST["cDOB"])));
    }

    // Gender validation
    if (empty($_POST["cgender"])) {
        $genderErr = "Gender is required";
        $hasError = true;
    } else {
        $gender = $conn->real_escape_string(htmlspecialchars(trim($_POST["cgender"])));
    }

    // If no errors, insert into database
    if (!$hasError) {
        $sql = "INSERT INTO customer (Name, Email, Password, DOB, Gender) VALUES ('$name', '$email', '$password', '$dob', '$gender')";
        if ($conn->query($sql) === TRUE) {
            $success = "Registration Successful!";
            $name = $email = $password = $dob = $gender = "";
        } else {
            $success = "Error: " . $conn->error;
        }
    }
}
?>