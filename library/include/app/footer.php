
</div>

</div>

<script type="text/javascript" src="../../library/assets/app/assets/js/vendor.js"></script>
<script type="text/javascript" src="../../library/assets/app/assets/js/app.js"></script>
<script type="text/javascript" src="../../library/assets/app/assets/bootstrap/popper.min.js"></script>
<script type="text/javascript" src="../../library/assets/app/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../../library/assets/app/assets/js/ajax-handler.js"></script>
<script type="text/javascript" src="../../library/assets/app/assets/js/multi-file.js"></script>
<script type="text/javascript" src="../../library/assets/app/assets/bootstrap/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="../../library/assets/app/assets/fontawesome/js/all.min.js"></script>-->
<script type="text/javascript" src="../../library/assets/app/assets/js/marquee.js"></script>
<script src="notification/script.js"></script>

<script>



    //shwpassword
    function shPwd() {
        var x = document.getElementById("shpwd");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
//    Tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('.carousel').carousel({
        interval: 2000
    })
//    Form Resubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
//Notify
console.clear();
const appEl = document.querySelector("#app");
const notificationEl = appEl.querySelector(".notification");
const toggleEl = notificationEl.querySelector(".notification-header");

// Add click even listener to toggle state
toggleEl.addEventListener("click", () => {
    // Usi FLIP to trigger animations
    flip(() => {
        appEl.dataset.state = appEl.dataset.state === "closed" ? "opened" : "closed";
    }, notificationEl)
    // Add flip to content
    flip(() => {}, appEl.querySelector('.app-content'));
});

// F.L.I.P
const flip = (doSomething, firstEl, getLastEl = () => firstEl) => {
    // First
    const firstElRect = firstEl.getBoundingClientRect();

    requestAnimationFrame(() => {
        doSomething();

        // Last
        let lastEl = getLastEl();
        const lastElRect = lastEl.getBoundingClientRect();

        // Invert
        const dx = lastElRect.x - firstElRect.x;
        const dy = lastElRect.y - firstElRect.y;
        const dw = lastElRect.width / firstElRect.width;
        const dh = lastElRect.height / firstElRect.height;

        console.log({ dx, dy, dh, dw });

        lastEl.dataset.flipping = true;
        lastEl.style.setProperty("--dx", dx);
        lastEl.style.setProperty("--dy", dy);
        lastEl.style.setProperty("--dw", dw);
        lastEl.style.setProperty("--dh", dh);

        // Play
        requestAnimationFrame(() => {
            delete lastEl.dataset.flipping;
        });
    });
};


</script>

</body>
</html>
