document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function (e) {
        let isValid = true;
        let errorMessage = "";

        // Get all input values
        const name = document.querySelector("input[name='name']").value.trim();
        const email = document.querySelector("input[name='email']").value.trim();
        const phone = document.querySelector("input[name='phone']").value.trim();
        const gender = document.querySelector("input[name='gender']:checked");
        const address = document.querySelector("input[name='address']").value.trim();
        const area = document.querySelector("select[name='area']").value;
        const password = document.querySelector("input[name='password']").value.trim();
        const image = document.querySelector("input[name='image']").value;

        // Name check
        if (name === "") {
            errorMessage += "Name is required.\n";
            isValid = false;
        }

        // Email check
        if (email === "") {
            errorMessage += "Email is required.\n";
            isValid = false;
        } else if (!email.includes("@") || !email.includes(".")) {
            errorMessage += "Email format is invalid.\n";
            isValid = false;
        }

        // Phone number check
        if (phone === "") {
            errorMessage += "Phone number is required.\n";
            isValid = false;
        } else if (!/^\d{11}$/.test(phone)) {
            errorMessage += "Phone number must be 11 digits and only numbers.\n";
            isValid = false;
        }

        // Gender check
        if (!gender) {
            errorMessage += "Gender must be selected.\n";
            isValid = false;
        }

        // Address check
        if (address === "") {
            errorMessage += "Address is required.\n";
            isValid = false;
        }

        // Area check
        if (area === "") {
            errorMessage += "Area must be selected.\n";
            isValid = false;
        }

        // Password check
        if (password === "") {
            errorMessage += "Password is required.\n";
            isValid = false;
        } else if (password.length < 6) {
            errorMessage += "Password must be at least 6 characters long.\n";
            isValid = false;
        }

        // Image file extension check
        if (image === "") {
            errorMessage += "Please upload an image.\n";
            isValid = false;
        } else {
            const allowedExtensions = ["jpg", "jpeg", "png", "gif"];
            const fileExtension = image.split('.').pop().toLowerCase();
            if (!allowedExtensions.includes(fileExtension)) {
                errorMessage += "Image must be a jpg, jpeg, png, or gif file.\n";
                isValid = false;
            }
        }

        // If any errors found, prevent form and show alert
        if (!isValid) {
            e.preventDefault();
            alert(errorMessage);
        }
    });
});
