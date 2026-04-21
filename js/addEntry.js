let clear = document.getElementById("clearButton");

clear.addEventListener("click", confirmClear);

function confirmClear(event) {

    if (!confirm("Are you sure you want to clear the form?")) {
        event.preventDefault();
    }
}