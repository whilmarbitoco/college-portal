export default function accordion() {
    const headers = document.querySelectorAll(".accordion-header");

    headers.forEach((header) => {
        header.addEventListener("click", () => {
            const item = header.parentElement;
            const content = item.querySelector(".accordion-content");

            // Close all accordion contents
            document.querySelectorAll(".accordion-content").forEach((el) => {
                el.classList.add("hidden");
            });

            // Toggle this one
            if (content.classList.contains("hidden")) {
                content.classList.remove("hidden");
            }
        });
    });
}
