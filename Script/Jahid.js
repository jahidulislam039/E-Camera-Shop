document.getElementById("regForm").addEventListener("submit", function(event) {
    let isValid = true;

    // Full Name
    let name = document.getElementById("cname").value.trim();
    if (name === "") {
        document.getElementById("nameError").innerHTML = "Full Name is required.";
        isValid = false;
    } else {
        document.getElementById("nameError").innerHTML = "";
    }

    // Email
    let email = document.getElementById("cemail").value.trim();
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Enter a valid email.";
        isValid = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
    }

    // Password
    let password = document.getElementById("cpassword").value;
    if (password.length < 6) {
        document.getElementById("passError").innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    } else {
        document.getElementById("passError").innerHTML = "";
    }

    // Date of Birth
    let dob = document.getElementById("cDOB").value;
    if (dob === "") {
        document.getElementById("dobError").innerHTML = "Please select your date of birth.";
        isValid = false;
    } else {
        document.getElementById("dobError").innerHTML = "";
    }

    // Gender
    let genderMale = document.getElementById("cmale").checked;
    let genderFemale = document.getElementById("cfemale").checked;
    if (!genderMale && !genderFemale) {
        document.getElementById("genderError").innerHTML = "Select your gender.";
        isValid = false;
    } else {
        document.getElementById("genderError").innerHTML = "";
    }

    // Prevent form submission if invalid
    if (!isValid) {
        event.preventDefault();
    }
});