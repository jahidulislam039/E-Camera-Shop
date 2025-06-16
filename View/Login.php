<?php
include("../Control/login_validation.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/Jahid.css">
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <fieldset>
            <legend>Account Login</legend>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
            <span style="color:red;"><?php echo $emailErr; ?></span>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span style="color:red;"><?php echo $passErr; ?></span>
            <br>
            <button type="submit">Login</button>
            <span style="color:red;"><?php echo $loginErr; ?></span>
        </fieldset>
    </form>
    <div class="login-link-container">
        <span>Don't have an account?</span>
        <a href="Customer.php">
            <button type="button">Register</button>
        </a>
    </div>
</body>
</html>