const codeExampleImages = document.querySelectorAll(".exampleImage");
const exampleOverlay = document.querySelector(".exampleBackground");
const exampleCloseButton = document.querySelector("#exampleCloseButton");

function toggleExampleImage(event) {
    const clickedImage = event.currentTarget;
    clickedImage.classList.toggle("active");
    exampleOverlay.classList.toggle("active");
}

codeExampleImages.forEach(image => {
    image.addEventListener("click", toggleExampleImage);
});

exampleOverlay.addEventListener("click", () => {
    codeExampleImages.forEach(image => {
        image.classList.remove("active");
    });
    exampleOverlay.classList.remove("active");    
});