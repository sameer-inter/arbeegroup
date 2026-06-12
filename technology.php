<?php include "main.php" ?>

<div id="pageWrapper" class="TechnologyPage">
    
    <!-- Inner Banner -->
    <section class="inner_banner">
        <!-- Web -->
        <div class="d-none d-md-block">
            <img loading="lazy" class="bg" src="assets/images/technology_banner.jpg" alt="banner img">
        </div>
        <!-- Mobile -->
        <div class="d-block d-md-none">
            <img loading="lazy" class="bg" src="assets/images/technology_banner.jpg" alt="banner img">
        </div>
        <div class="inner_cap">
            <div class="container">
                <div class="cap_dtl">
                    <h1 class="main_title">Driving Progress with Innovation</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Bread Crumb -->
    <section>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index1.php">Home</a></li>
                <li>Technology</li>
            </ul>
        </div>
    </section>

    <!-- Technology -->
    <section class="technology_sec">
        <div class="owl-carousel technology-slider">
            <div class="item">
                <div class="techno-item">
                    <div class="row">
                        <div class="col-md-6">
                            <figure>
                                <img loading="lazy" src="assets/images/technology_img1.jpg" alt="technology img">
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <div class="rgt-dtl">
                                <div class="dtl-inn typo">
                                    <div class="techno-scroll">
                                        <h2 class="global_title">Research & Development</h2>
                                        <p>At Arbee, as pioneers in fish oil extraction and export in India, we place immense focus on research and development. Our relentless dedication and investments in R&D have yielded remarkable results. We proudly offer top-notch, internationally compliant products such as Omega-3 and vitamin-rich Refined Fish Oil, Superior Fish Meal and other Quality Marine Ingredient Extracts. Renowned for their purity, our range adheres to the highest product standards.</p>
                                        <p>Driven by our commitment to sustainability, we have successfully developed environmentally friendly bio-diesel and glycerene sourced purely from natural origins. Our innovative efforts have also led to the creation of a diverse range of fish oil products catering to various applications. From being a natural food supplement ingredient to veterinary-grade food supplements, cosmetic applications, and unique food industry uses, Arbee provides tailored solutions for a wide array of needs.</p>
                                        <p>Experience the excellence of our research and development endeavours, delivering superior-quality fish oil products with unparalleled benefits.</p>
                                        <p>Experience the excellence of our research and development endeavours, delivering superior-quality fish oil products with unparalleled benefits.</p>
                                        <p>Experience the excellence of our research and development endeavours, delivering superior-quality fish oil products with unparalleled benefits.</p>
                                        <p>Experience the excellence of our research and development endeavours, delivering superior-quality fish oil products with unparalleled benefits.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="techno-item">
                    <div class="row">
                        <div class="col-md-6">
                            <figure>
                                <img loading="lazy" src="assets/images/technology_img2.jpg" alt="technology img">
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <div class="rgt-dtl">
                                <div class="dtl-inn">
                                    <h2 class="global_title">Manufacturing Facilities</h2>
                                    <p>Our world-class manufacturing facilities are equipped with the latest machinery and adhere to the highest quality standards. We ensure the entire production process is closely monitored to maintain consistency and purity in every batch. From sourcing the finest raw materials to processing, refining, and packaging, we employ stringent quality control measures to deliver products of exceptional quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- TechnologySlider -->
<script>
    $(document).ready(function () {
        $('.technology-slider').owlCarousel({
            margin: 0,
            loop: false,
            dots: false,
            nav: true,
            autoplay: false,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            items: 1,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive: {
                0: { dots: true, nav: false },
                576: {dots: true, nav: false },
                768: {dots: false, nav: true },
            }
        });
    });
</script>

<!-- MScroll -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- MScroll -->
<script>
    (function ($) {
        $(".techno-scroll").mCustomScrollbar({
            axis: "y",
            theme: "dark"
        });
    })(jQuery);
</script>

<?php include "./includes/footer.php" ?>