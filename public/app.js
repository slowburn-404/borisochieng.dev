//fetch navigation items and nav menu from DOM
const navigationItems = document.querySelectorAll("#navItem")
const dropDownMenu = document.querySelector("#navbar-sticky")

//hide menu when nav item is clicked
navigationItems.forEach(link => {
    link.addEventListener("click", () => {
        dropDownMenu.classList.toggle("hidden")
    })
})