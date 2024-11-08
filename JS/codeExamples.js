const codeExampleImages = document.querySelectorAll(".exampleImage");
const exampleOverlay = document.querySelector(".exampleBackground");
const exampleCloseButton = document.querySelector("#exampleCloseButton");
const exampleContainer = document.querySelectorAll(".exampleContainer");

function toggleExampleImage(event) {
    const clickedImage = event.currentTarget;
    clickedImage.classList.toggle("active");
    exampleOverlay.classList.toggle("active");
    exampleContainer.forEach(container => {
        container.classList.toggle("canHover");
    });
}

codeExampleImages.forEach(image => {
    image.addEventListener("click", toggleExampleImage);
});

exampleOverlay.addEventListener("click", () => {
    codeExampleImages.forEach(image => {
        image.classList.remove("active");
    });
    exampleOverlay.classList.remove("active"); 
    
    exampleContainer.forEach(container => {
        container.classList.add("canHover");
    });
});