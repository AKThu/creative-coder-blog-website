
// select dropdown button
const menuButton = document.querySelector("#menu-button");
menuButton.addEventListener("click", toggleDropdown);

// select menu inside dropdown button
const menu = menuButton.parentElement.nextElementSibling;

// show menu clicked dropdown button
function toggleDropdown() {
    menu.style.visibility = menu.style.visibility !== "visible" ? "visible" : "hidden";
}

// hide menu when clicked outsite of menu button
document.addEventListener("click", e => {
    const insideToggleButton = menu.contains(e.target) || menuButton.contains(e.target);
    if(!insideToggleButton) {
        menu.style.visibility = "hidden";
    }
});