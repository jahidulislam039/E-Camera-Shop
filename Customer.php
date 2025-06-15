<?php
include("./control/register_validation.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Page</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Jahid.css">
</head>
<body>

<h1>E-Camera Shop</h1>
<h2>Customer Registration</h2>

<?php if (!empty($success)): ?>
    <div class="success-message"><?php echo $success; ?></div>
<?php endif; ?>

<form method="POST" action="">
    <fieldset>
        <legend>Customer Details:</legend>
        <table>
            <tr>
                <td><label for="cname">Full Name:</label></td>
                <td>
                    <input type="text" id="cname" name="cname" value="<?php echo $name; ?>">
                    <span style="color:red;"><?php echo $nameErr; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="cemail">Email Address:</label></td>
                <td>
                    <input type="email" id="cemail" name="cemail" value="<?php echo $email; ?>">
                    <span style="color:red;"><?php echo $emailErr; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="cpassword">Password:</label></td>
                <td>
                    <input type="password" id="cpassword" name="cpassword">
                    <span style="color:red;"><?php echo $passErr; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="cDOB">Date of Birth:</label></td>
                <td>
                    <input type="date" id="cDOB" name="cDOB" value="<?php echo $dob; ?>">
                    <span style="color:red;"><?php echo $dobErr; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="cgender">Gender:</label></td>
                <td>
                    <input type="radio" id="cmale" name="cgender" value="male" <?php if ($gender == "male") echo "checked"; ?>> Male
                    <input type="radio" id="cfemale" name="cgender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Female
                    <span style="color:red;"><?php echo $genderErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Register</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>
