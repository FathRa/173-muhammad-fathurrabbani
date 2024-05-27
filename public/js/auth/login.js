const loginButton = document.getElementById("login-btn");
const loginDialog = document.getElementById("login-dialog");
const closeLogin = document.getElementById("close-login");

loginButton.addEventListener("click", () => {
    loginDialog.showModal();
});

closeLogin.addEventListener("click", () => {
    loginDialog.close();
});
