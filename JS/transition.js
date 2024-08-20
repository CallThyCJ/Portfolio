const transitionEl = document.querySelector(".transition");

window.onload = () => {
    const anchors = document.querySelectorAll("a");
    console.log("page loaded");

    setTimeout(() => {
        transitionEl.classList.remove("isActive");
        console.log("active removed");
    }, 500);

    for (let i = 0; i < anchors.length; i++) {
        const anchor = anchors[i];

        anchor.addEventListener("click", e => {
            const currentUrl = window.location.href.split('#')[0];
            const targetUrl = anchor.href.split('#')[0];
            const hash = anchor.hash;  // Get the hash part of the URL

            if (currentUrl === targetUrl && hash) {
                // Same page, different section
                e.preventDefault();

                const targetElement = document.querySelector(hash);
                if (targetElement) {
                    // Smooth scroll to the section
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            } else {
                // Different page, apply transition
                e.preventDefault();
                let target = e.currentTarget.href;

                transitionEl.classList.add("isActive");

                setTimeout(() => {
                    window.location.assign(target);
                    console.log(target);
                }, 500);
            }
        });
    }
}