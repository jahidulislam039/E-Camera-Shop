<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Page</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Jahid.css">
</head>

<body>
    
    <h1>E-Camera Shop</h1>

    <h2>Customer Registration</h2>
    
    <form>
        <fieldset>
            <legend>Customer Details:</legend>
        <table>
            <tr>
                <td><label for="cname">Full Name:</label></td>
                <td><input type="text" id="cname" name="cname" ></td>
            </tr>
            <tr>
                <td><label for="cemail">Email Address:</label></td>
                <td><input type="email" id="cemail" name="cemail" ></td>
            </tr>
            <tr>
                <td><label for="cpassword">Password:</label></td>
                <td><input type="password" id="cpassword" name="cpassword" ></td>
            </tr>
            <tr>
                <td><label for="cDOB">Date of Birth:</label></td>
                <td><input type="date" id="cDOB" name="cDOB" ></td>
            </tr>
            <tr>
                <td><label for="cgender">Gender:</label></td>
                <td>
                    <input type="radio" id="cmale" name="cgender" value="male"> Male
                    <input type="radio" id="cfemale" name="cgender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td><label for="cInt">Interests:</label></td>
                <td>
                    <input type="checkbox" id="cphoto" name="cInt" value="photo"> Potography
                    <input type="checkbox" id="cvideo" name="cInt" value="video"> Videography
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