const mobileMenu = document.querySelector("#mobileNavBar");
const mobileMenuButton = document.querySelector("#burgerButton");
const mobileCloseButton = document.querySelector("#mobileBurgerButton");


mobileMenuButton.addEventListener("click", function() {
    mobileMenu.classList.toggle("isActive");
})

mobileCloseButton.addEventListener("click", function() {
    mobileMenu.classList.toggle("isActive");
})
