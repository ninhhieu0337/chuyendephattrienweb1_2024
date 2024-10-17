<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

preg_match($pattern_uri, $_SERVER['REQUEST_URI'], $matches);
$url_path = $url_host . (isset($matches[1]) ? $matches[0] : '');

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container-3025">
    <h1>Testimonials</h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="card">
                    <div class="avatar">
                        <img src="./images/1.jpg" alt="User Avatar">
                    </div>
                    <h3>Water Damage Repair</h3>
                    <p>Excellent service and swift repair and I get to keep my Phone. I feel Really great.</p>
                    <div class="user-info">
                        <div class="user-name">
                            <h6>John Wiliamson</h6>
                            <p>Newyork City</p>
                        </div>
                        <div class="rating">
                            <span>★★★☆☆</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <div class="avatar">
                        <img src="./images/2.jpg" alt="User Avatar">
                    </div>
                    <h3>Broken Glass Repair</h3>
                    <p>Great service as this was2nd repair with Mr.Fixit, excellent communication.</p>
                    <div class="user-info">
                        <div class="user-name">
                            <h6>Astley Fletcher</h6>
                            <p>Los Angles</p>
                        </div>
                        <div class="rating">
                            <span>★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <div class="avatar">
                        <img src="./images/3.jpg" alt="User Avatar">
                    </div>
                    <h3>Water Damage Repair</h3>
                    <p>Repaired my iPhone 6s through thorough examination, updated at all times.</p>
                    <div class="user-info">
                        <div class="user-name">
                            <h6>Mitchel Starc</h6>
                            <p>California</p>
                        </div>
                        <div class="rating">
                            <span>★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <div class="avatar">
                        <img src="./images/1.jpg" alt="User Avatar">
                    </div>
                    <h3>Water Damage Repair</h3>
                    <p>Excellent service and swift repair and I get to keep my Phone. I feel Really great.</p>
                    <div class="user-info">
                        <div class="user-name">
                            <h6>John Wiliamson</h6>
                            <p>Newyork City</p>
                        </div>
                        <div class="rating">
                            <span>★★★☆☆</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <div class="avatar">
                        <img src="./images/2.jpg" alt="User Avatar">
                    </div>
                    <h3>Broken Glass Repair</h3>
                    <p>Great service as this was2nd repair with Mr.Fixit, excellent communication.</p>
                    <div class="user-info">
                        <div class="user-name">
                            <h6>Astley Fletcher</h6>
                            <p>Los Angles</p>
                        </div>
                        <div class="rating">
                            <span>★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <div class="avatar">
                        <img src="./images/3.jpg" alt="User Avatar">
                    </div>
                    <h3>Water Damage Repair</h3>
                    <p>Repaired my iPhone 6s through thorough examination, updated at all times.</p>
                    <div class="user-info">
                        <div class="user-name">
                            <h6>Mitchel Starc</h6>
                            <p>California</p>
                        </div>
                        <div class="rating">
                            <span>★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true, 
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

    });
</script>