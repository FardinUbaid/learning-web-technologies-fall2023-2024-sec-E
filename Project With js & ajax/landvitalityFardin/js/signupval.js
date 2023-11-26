//for signup validation
function signupval() {
    let id = document.getElementById("id").value;
    let fusername = document.getElementById("fusername").value;
    let lusername = document.getElementById("lusername").value;
    let password = document.getElementById("password").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let gender = document.getElementById("gender").value;
    let dateOfBirth = document.getElementById("date_of_birth").value;
    let userType = document.querySelector('input[name="usertype"]:checked').value;

    if (id === "" || fusername === "" || lusername === "" || password === "" || phone === "" || email === "" || gender === "none" || dateOfBirth === "" || userType === "") {
        alert("Please fill out all fields.");
        return false;
    }
}


