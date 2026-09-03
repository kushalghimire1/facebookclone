document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("loginForm");

    form.addEventListener("submit", (e) => {

        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();

        if (email === "" || password === "") {
            e.preventDefault();
            alert("Please fill all fields.");
            return;
        }

        if (password.length < 6) {
            e.preventDefault();
            alert("Password must be at least 6 characters.");
            return;
        }

    });

});