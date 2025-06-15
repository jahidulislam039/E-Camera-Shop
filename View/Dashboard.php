<?php
// filepath: View/dashboard.php
session_start();
require_once("../Model/db.php");

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Fetch user info from database
$user_id = $_SESSION["user_id"];
$sql = "SELECT Name, Email, Dob, Gender FROM customer WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($name, $email, $dob, $gender);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/jahid.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
        <div class="dashboard-info">
            <p><label>Name:</label> <?php echo htmlspecialchars($name); ?></p>
            <p><label>Email:</label> <?php echo htmlspecialchars($email); ?></p>
            <p><label>Date of Birth:</label> <?php echo htmlspecialchars($dob); ?></p>
            <p><label>Gender:</label> <?php echo htmlspecialchars($gender); ?></p>
        </div>
        <form method="post" action="../Control/Logout.php">
    <button type="submit" class="logout-btn">Logout</button>
</form>
    </div>
</body>
</html>