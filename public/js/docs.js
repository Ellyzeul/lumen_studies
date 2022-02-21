const collapsibles = document.querySelectorAll(".docs_collapsible");

collapsibles.forEach(coll => {
    coll.addEventListener("click", function() {
        this.classList.toggle("docs_active");
        const content = this.nextElementSibling;

        if (content.style.display === "block") {
            content.style.display = "none";
            return;
        }
        
        content.style.display = "block";
    })
})