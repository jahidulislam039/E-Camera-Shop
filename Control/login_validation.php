<?php
// filepath: Control/login_validation.php

session_start();
require_once("../Model/db.php");

$email = $password = "";
$emailErr = $passErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hasError = false;

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $hasError = true;
    } else {
        $email = $conn->real_escape_string(trim($_POST["email"]));
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passErr = "Password is required";
        $hasError = true;
    } else {
        $password = trim($_POST["password"]);
    }

    // If no errors, check credentials
    if (!$hasError) {
        $sql = "SELECT ID, Password FROM customer WHERE Email='$email'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["Password"])) {
                // Login successful
                $_SESSION["user_id"] = $row["ID"];
                header("Location: ../View/Dashboard.php"); // Change to your dashboard or home page
                exit();
            } else {
                $loginErr = "Invalid email or password";
            }
        } else {
            $loginErr = "Invalid email or password";
        }
    }
}
?>