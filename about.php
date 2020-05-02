<?php
ob_start();
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ERROR);
require_once 'config/connect.php';
include 'inc/header.php';
include 'inc/nav.php';
?>


<!-- SHOP CONTENT -->
<link rel="stylesheet" type="text/css" href="css/about.css">
<section id="content">
    <div class="content-blog">
            <h2 class="text-center">Easy Foods Grocery</h2>
        <div class="row">
            <div id="jsSlideshow" data-speed="5.5" data-fade="3.2" class="js-slideshow" style="width: 45%;margin: 0 auto;max-height: 250px;">
                <figure><img src="admin/inc/logo.PNG" alt="">
                    <figcaption>
                        <h3>Location</h3>
                        <p>Located in the heart of Nakuru, we are an online food and grocery shop that offers quality range of products at a value you can trust.</p>
                    </figcaption>
                </figure>
                <figure><img src="https://source.unsplash.com/random/700x600" alt="">
                    <figcaption>
                        <p>Easy Foods values your time, convenience and lifestyle needs, we therefore deliver all our products right to your doorstep.</p>
                    </figcaption>
                </figure>
                <figure><img src="https://source.unsplash.com/random/600x600" alt="">
                    <figcaption>
                        <p>Count on Easy Foods as your reliable partner and together, lets make your grocery shopping easier.</p>
                    </figcaption>
                </figure>
                <figure><img src="https://source.unsplash.com/random/500x600" alt="">
                    <figcaption>
                        <p>Client satisfaction is our main priority and we assure you that our groceries are organic, fresh and of high quality. We promise you that no bruised fruit or wilted vegetable will ever fall into your shopping cart.</p>
                    </figcaption>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</section>

<?php include 'inc/footer.php' ?>
<script type="text/javascript">
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

</script>
