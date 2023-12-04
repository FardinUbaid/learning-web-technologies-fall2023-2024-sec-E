function loginval() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let mailError = document.getElementById("mailError");
    let passError = document.getElementById("passError");

    mailError.textContent = "";
    passError.textContent = "";

    if (email === "") {
        mailError.textContent = "Please enter your EMAIL ID.";
        return false;
    }

    if (password === "") {
        passError.textContent = "Please enter your PASSWORD.";
        return false;
    }

    return true;
}
