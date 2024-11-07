const codeExampleImages = document.querySelector(".exampleImage");
const exampleOverlay = document.querySelector(".exampleBackground");
const exampleCloseButton = document.querySelector("#exampleCloseButton");

function toggleExampleImage() {
    codeExampleImages.classList.toggle("active");
    exampleOverlay.classList.toggle("active");
}

codeExampleImages.addEventListener("click", toggleExampleImage);

exampleOverlay.addEventListener("click", toggleExampleImage);