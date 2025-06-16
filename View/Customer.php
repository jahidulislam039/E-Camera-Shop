<?php
include("../Control/register_validation.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/Jahid.css">
</head>
<body>
    <h2>Customer Registration</h2>
    <?php if (!empty($success)): ?>
        <div class="success-message"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="post" action="">
        <fieldset>
            <legend>Register</legend>
            <label for="cname">Full Name:</label>
            <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars($name); ?>">
            <span style="color:red;"><?php echo $nameErr; ?></span>
            <br>
            <label for="cemail">Email:</label>
            <input type="email" name="cemail" id="cemail" value="<?php echo htmlspecialchars($email); ?>">
            <span style="color:red;"><?php echo $emailErr; ?></span>
            <br>
            <label for="cpassword">Password:</label>
            <input type="password" name="cpassword" id="cpassword">
            <span style="color:red;"><?php echo $passErr; ?></span>
            <br>
            <label for="cDOB">Date of Birth:</label>
            <input type="date" name="cDOB" id="cDOB" value="<?php echo htmlspecialchars($dob); ?>">
            <span style="color:red;"><?php echo $dobErr; ?></span>
            <br>
            <label>Gender:</label>
            <input type="radio" name="cgender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male
            <input type="radio" name="cgender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female
            <input type="radio" name="cgender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>> Other
            <span style="color:red;"><?php echo $genderErr; ?></span>
            <br><br>
            <button type="submit">Register</button>
        </fieldset>
    </form>
    <div class="login-link-container">
        <span>Already have an account?</span>
        <a href="login.php">
            <button type="button">Login</button>
        </a>
    </div>
</body>