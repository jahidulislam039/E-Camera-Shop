<!DOCTYPE html>
<html>
<head>
    <title>Seller Registration Page</title>
    <link rel="stylesheet" type="text/css" href="./CSS/chayan.css">
</head>
<body>
    <h1>E-Camera Shop</h1>

    <h2>Seller Registration</h2>
    <fieldset>
    <legend>Seller Details</legend>
    <form>
        <table>
            <tr>
                <td><label for="sname">Full Name:</label></td>
                <td><input type="text" id="sname" name="sname"></td>
            </tr>
            <tr>
                <td><label for="semail">Email Address:</label></td>
                <td><input type="email" id="semail" name="semail"></td>
            </tr>
            <tr>
                <td><label for="scompany">Company Name:</label></td>
                <td><input type="text" id="scompany" name="scompany"></td>
            </tr>
            <tr>
                <td><label for="sphone">Phone Number:</label></td>
                <td><input type="tel" id="sphone" name="sphone"></td>
            </tr>
            <tr>
                <td><label for="sgender">Gender:</label></td>
                <td>
                    <input type="radio" id="smale" name="sgender" value="male"> Male
                    <input type="radio" id="sfemale" name="sgender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td><label for="sbusinessType">Business Type:</label></td>
                <td>
                    <select id="sbusinessType" name="sbusinessType">
                        <option value="">Select Business Type</option>
                        <option value="individual">Individual</option>
                        <option value="smallBusiness">Small Business</option>
                        <option value="largeCorporation">Large Corporation</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="sphoto">Upload NID Photo:</label></td>
                <td><input type="file" id="sphoto" name="sphoto"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Register</button>
                </td>
            </tr>
        </table>
    </form>
    </fieldset>
    <script src="./Script/chayan.js"></script>
</body>
</html>