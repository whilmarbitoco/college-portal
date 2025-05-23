export default function tab() {
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabPanes = document.querySelectorAll(".tab-content");

    tabButtons.forEach((button) => {
        const target = button.getAttribute("data-tab");
        const tab = document.getElementById(target);

        if (target.endsWith("1")) {
            button.classList.add("tab-active");
            tab.classList.remove("hidden");
            tab.classList.add("flex-1");
        }

        button.addEventListener("click", () => {
            tabButtons.forEach((btn) => btn.classList.remove("tab-active"));
            tabPanes.forEach((pane) => {
                pane.classList.remove("flex-1");
                pane.classList.add("hidden");
            });

            button.classList.add("tab-active");
            tab.classList.remove("hidden");
            tab.classList.add("flex-1");
        });
    });
}
