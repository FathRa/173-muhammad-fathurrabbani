const Tabs = document.querySelectorAll("#tab>li");
const Contents = document.querySelectorAll("#tab-content>div");

Tabs.forEach((tab) => {
    tab.addEventListener("click", (evt) => {
        let Active = evt.target["id"] == tab.getAttribute("id");

        if (Active) {
            tab.classList.add("tab-active");
        }

        Tabs.forEach((restTab) => {
            if (restTab.getAttribute("id") !== evt.target["id"]) {
                restTab.classList.remove("tab-active");
            }
        });

        Contents.forEach((content) => {
            if (content.classList.contains("block")) {
                content.classList.replace("block", "hidden");
            }

            if (content.getAttribute("data-id") == tab.getAttribute("id")) {
                content.classList.replace("hidden", "block");
            }
        });
    });
});
