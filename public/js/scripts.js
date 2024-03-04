
// getting dropdown buttons

// for categories button
// select dropdown button
const menuButtonCategories = document.querySelector("#menu-button-categories");
// select menu inside dropdown button
const menuCategories = menuButtonCategories.parentElement.nextElementSibling;
// add event to dropdown button
menuButtonCategories.addEventListener("click", () => toggleDropdown(menuCategories));

// for author button
// select dropdown button
const menuButtonAuthors = document.querySelector("#menu-button-authors");
// select menu inside dropdown button
const menuAuthors = menuButtonAuthors.parentElement.nextElementSibling;
// add event to dropdown button
menuButtonAuthors.addEventListener("click", () => toggleDropdown(menuAuthors));



// show menu when clicked dropdown button
function toggleDropdown(menu) {
    console.log(menu)
    menu.style.visibility = menu.style.visibility !== "visible" ? "visible" : "hidden";
}

// hide menu when clicked outsite of dropdown button
document.addEventListener("click", e => {
    // hiding categories menu
    const insideCategoriesToggleButton = menuCategories.contains(e.target) || menuButtonCategories.contains(e.target);
    if(!insideCategoriesToggleButton) {
        menuCategories.style.visibility = "hidden";
    }
    // hiding authors menu
    const insideAuthorsToggleButton = menuAuthors.contains(e.target) || menuButtonAuthors.contains(e.target);
    if(!insideAuthorsToggleButton) {
        menuAuthors.style.visibility = "hidden";
    }
});