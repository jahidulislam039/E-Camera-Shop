<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Page</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Jahid.css">
</head>

<body>

    <h1>E-Camera Shop</h1>
    <h2>Customer Registration</h2>
    
    <form id="regForm">
        <fieldset>
            <legend>Customer Details:</legend>
        <table>
            <tr>
                <td><label for="cname">Full Name:</label></td>
                <td>
                    <input type="text" id="cname" name="cname">
                    <span id="nameError" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td><label for="cemail">Email Address:</label></td>
                <td>
                    <input type="email" id="cemail" name="cemail">
                    <span id="emailError" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td><label for="cpassword">Password:</label></td>
                <td>
                    <input type="password" id="cpassword" name="cpassword">
                    <span id="passError" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td><label for="cDOB">Date of Birth:</label></td>
                <td>
                    <input type="date" id="cDOB" name="cDOB">
                    <span id="dobError" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td><label for="cgender">Gender:</label></td>
                <td>
                    <input type="radio" id="cmale" name="cgender" value="male"> Male
                    <input type="radio" id="cfemale" name="cgender" value="female"> Female
                    <span id="genderError" style="color:red;"></span>
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
    <script src="./Script/Jahid.js"></script>
</body>
</html>