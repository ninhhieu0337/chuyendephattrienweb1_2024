<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

preg_match($pattern_uri, $_SERVER['REQUEST_URI'], $matches);
$url_path = $url_host . (isset($matches[1]) ? $matches[0] : '');

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container-3009">
    <div class="elementor-element">
        <div class="elementor">
            <h6>TESTIMONIAL</h6>
            <h2>Client Feedback & Reviews</h2>
        </div>
        <svg aria-hidden="true" class="e-font-icon-svg e-fab-google" viewBox="0 0 488 512"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
            </path>
        </svg>
        <div class="separator"></div>
        <div class="">
            <div class="rating">★ ★ ★ ★ ✩</div>
            <div class="">
                <h5>4.7 customer review</h5>
            </div>
        </div>


    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/anh2.jpg" alt="Client 1">
                <p>"

                    Water damaged my phone and I panicked immediately. Thankfully, MobiCare saved my device completely.
                    Their technicians are absolute life-savers! "</p>
                <strong>Emily Roberts</strong>
                <p>Jakarta</p>
            </div>

            <div class="swiper-slide">
                <img src="./images/anh3.jpg" alt="Client 2">
                <p>"
                    My camera wasn’t working, but MobiCare fixed it fast. They explained the problem very clearly. Now
                    my phone works perfectly again "</p>
                <strong>Michael Brown</strong>
                <p>Jakarta</p>
            </div>

            <div class="swiper-slide">
                <img src="./images/anh1.jpg" alt="Client 3">
                <p>"
                    I was skeptical, but MobiCare exceeded my expectations. The customer service was incredibly helpful
                    throughout. I highly recommend their repairs! "</p>
                <strong>Olivia Davis</strong>
                <p>Jakarta</p>
            </div>

            <div class="swiper-slide">
                <img src="./images/anh2.jpg" alt="Client 1">
                <p>"

                    Water damaged my phone and I panicked immediately. Thankfully, MobiCare saved my device completely.
                    Their technicians are absolute life-savers! "</p>
                <strong>Emily Roberts</strong>
                <p>Jakarta</p>
            </div>
            <div class="swiper-slide">
                <img src="./images/anh3.jpg" alt="Client 2">
                <p>"
                    My camera wasn’t working, but MobiCare fixed it fast. They explained the problem very clearly. Now
                    my phone works perfectly again "</p>
                <strong>Michael Brown</strong>
                <p>Jakarta</p>
            </div>
            <div class="swiper-slide">
                <img src="./images/anh1.jpg" alt="Client 3">
                <p>"
                    I was skeptical, but MobiCare exceeded my expectations. The customer service was incredibly helpful
                    throughout. I highly recommend their repairs! "</p>
                <strong>Olivia Davis</strong>
                <p>Jakarta</p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="all-reviews">
        <p>Trust the Experts of MobiCare - 100% Satisfaction Guaranteed!</p>
        <a href="#">ALL REVIEWS</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3, // Hiển thị 3 slide cùng lúc
        spaceBetween: 70, // Khoảng cách giữa các slide
        loop: true, // Cho phép vòng lặp
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 6000,
            disableOnInteraction: false, 
        },
    });

</script>