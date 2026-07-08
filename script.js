// Wait until the page loads
document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {

        let name = document.querySelector('input[name="name"]').value.trim();
        let email = document.querySelector('input[name="email"]').value.trim();
        let mobile = document.querySelector('input[name="mobile"]').value.trim();
        let age = document.querySelector('input[name="age"]').value.trim();
        let gender = document.querySelector('select[name="gender"]').value;
        let address = document.querySelector('textarea[name="address"]').value.trim();

        // Name validation
        if (name.length < 3) {
            alert("Name must contain at least 3 characters.");
            e.preventDefault();
            return;
        }

        // Email validation
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (!emailPattern.test(email)) {
            alert("Please enter a valid email.");
            e.preventDefault();
            return;
        }

        // Mobile validation
        let mobilePattern = /^[6-9]\d{9}$/;

        if (!mobilePattern.test(mobile)) {
            alert("Enter a valid 10-digit mobile number.");
            e.preventDefault();
            return;
        }

        // Age validation
        if (age < 18 || age > 100) {
            alert("Age must be between 18 and 100.");
            e.preventDefault();
            return;
        }

        // Gender validation
        if (gender === "") {
            alert("Please select your gender.");
            e.preventDefault();
            return;
        }

        // Address validation
        if (address.length < 5) {
            alert("Please enter your address.");
            e.preventDefault();
            return;
        }

        alert("Validation Successful!");
    });

});s