const textTarget = document.querySelector(".jsText");
const titles = ["Web Developer", "Software Developer", "Code Enjoyer"];
let sleepTime = 100;
let currentWord;
let currentTitleIndex = 0;
const currentPage = window.location.pathname;

// If JS is working then get rid of HTML title
document.querySelector(".htmlText").style.display = "none";

// Sleep Delay
function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
}

// Typewriter effect function
const typeWriterEffect = async (text) => {
    for (let i = 0; i < text.length; i++) {
        textTarget.innerText = text.substring(0, i + 1);
        await sleep(sleepTime);
    }
};

// Backspace effect function
const backspaceEffect = async (text) => {
    for (let i = text.length; i > 0; i--) {
        textTarget.innerText = text.substring(0, i - 1);
        await sleep(sleepTime);
    }
};

// Index Page Loop
const writeLoop = async () => {
    while (true) {
        let currentWord = titles[currentTitleIndex];

        await typeWriterEffect(currentWord);
        await sleep(sleepTime * 10);
        await backspaceEffect(currentWord);
        await sleep(sleepTime * 5);

        currentTitleIndex = (currentTitleIndex + 1) % titles.length;
    }
};

// Start the effect based on the page
if (currentPage == window.location.origin || currentPage.endsWith("index.html") ) {
    writeLoop();
    } else if (currentPage.includes("about-me.html")) {
        const runAboutMeEffect = async () => {
            await typeWriterEffect("About Me");
        };
    runAboutMeEffect();
    } else if (currentPage.includes("code-examples.html")) {
        const runCodeEGEffect = async () => {
            await typeWriterEffect("Code Examples");
        };
    runCodeEGEffect();
    } else if (currentPage.includes("scs.html")) {
        const runScsEffect = async () => {
            await typeWriterEffect("SCS Scheme");
        };
    runScsEffect();

}
