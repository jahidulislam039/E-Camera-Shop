<?php

session_start();
require_once("../Model/db.php");

$email = $password = "";
$emailErr = $passErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hasError = false;

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $hasError = true;
    } else {
        $email = $conn->real_escape_string(trim($_POST["email"]));
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
        $hasError = true;
    } else {
        $password = trim($_POST["password"]);
    }

    if (!$hasError) {
        $sql = "SELECT ID, Password FROM customer WHERE Email='$email'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["Password"])) {
                $_SESSION["user_id"] = $row["ID"];
                header("Location: ../View/Dashboard.php"); 
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