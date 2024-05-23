const form = document.getElementById("category-form");

const addBtn = document
    .getElementById("category-create")
    .addEventListener("click", (evt) => {
        evt.preventDefault();

        form.showModal();
    });

const close = document.getElementById("close").addEventListener("click", () => {
    form.close();
});
