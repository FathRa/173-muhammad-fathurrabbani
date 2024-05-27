const registerButton = document.getElementById("register-btn");
const registerDialog = document.getElementById("register-dialog");
const closeRegister = document.getElementById("close-register");

registerButton.addEventListener("click", () => {
    registerDialog.showModal();
});

closeRegister.addEventListener("click", () => {
    registerDialog.close();
});
