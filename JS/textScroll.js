const textTarget = document.querySelector(".jsText");
const titles = ["Web Developer", "Software Developer", "Code Enjoyer"];
let sleepTime = 100;
let currentTitleIndex = 0;

// If JS is working then get rid of HTML title
document.querySelector(".htmlText").style.display = "none";

// typewritter effect for titles
function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
}

const writeLoop = async () => {
    while (true) {
        let currentWord = titles[currentTitleIndex];

        for (let i = 0; i < currentWord.length; i++) {
            textTarget.innerText = currentWord.substring(0, i + 1);
            await sleep(sleepTime);
        }
        
        await sleep(sleepTime * 10);

        for (let i = currentWord.length; i > 0; i--) {
            textTarget.innerText = currentWord.substring(0, i - 1);
            await sleep(sleepTime);
        }

        await sleep(sleepTime * 5);

        if (currentTitleIndex === titles.length - 1) {
            currentTitleIndex = 0;
        } else {
            currentTitleIndex++;
        }
    }
};

writeLoop();
