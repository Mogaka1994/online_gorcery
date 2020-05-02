(() => {
    const ss = document.querySelector("#jsSlideshow");
    const a = ss.querySelectorAll("figure");
    ss.style.setProperty("--fade", ss.dataset.fade + "s");
    let i = 0;
    setInterval(() => {
        i++;
        a[(i - 1) % a.length].style.opacity = 0;
        a[i % a.length].style.opacity = 1;
    }, ss.dataset.speed * 1000);
})();
