const SignupForm = document.getElementById("Signup-form");
const SignupButton = document.getElementById("Signup-form-submit");
const SignupErrorMsg = document.getElementById("Signup-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = SignupForm.username.value;
    const password = SignupForm.password.value;

    if (username === "user" && password === "web_dev") {
        alert("You have successfully Signed up.");
        location.reload();
    } else {
        SignupErrorMsg.style.opacity = 1;
    }
})