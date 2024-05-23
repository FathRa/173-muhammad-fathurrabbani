const accForm = document.getElementById("account-form");

const editBtn = document
    .getElementById("edit-btn")
    .addEventListener("click", () => {
        accForm.showModal();
    });

const closeBtn = document
    .getElementById("close")
    .addEventListener("click", () => {
        accForm.close();
    });
