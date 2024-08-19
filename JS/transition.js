window.onload = () => {
    const transitionEl = document.querySelector(".transition")
    const anchors = document.querySelectorAll("a");

    setTimeout(() => {
        transitionEl.classList.remove("isActive");
    }, 500);

for (let i = 0; i < anchors.length; i++) {
    const anchor = anchors[i];

    anchor.addEventListener("click", e => {
        e.preventDefault();
        let target = e.target.href;

        transitionEl.classList.add("isActive");

        setTimeout(() => {
            window.location.href = target;
        }, 500);
    });
}
}