<?php include "main.php" ?>

<div id="pageWrapper" class="homePage">

    <link rel="preload" fetchpriority="high" href="assets/videos/hero_video1.mp4" as="fetch" type="video/mp4" crossorigin>
    <link rel="preload" fetchpriority="high" href="assets/videos/welcome_vid1.mp4" as="fetch" type="video/mp4" crossorigin>
    <link rel="preload" fetchpriority="high" href="assets/videos/welcome_vid2.mp4" as="fetch" type="video/mp4" crossorigin>
    <link rel="preload" fetchpriority="high" href="assets/videos/welcome_vid3.mp4" as="fetch" type="video/mp4" crossorigin>
    <link rel="preload" fetchpriority="high" href="assets/videos/welcome_vid4.mp4" as="fetch" type="video/mp4" crossorigin>

    <!-- Hero -->
    <section class="hero_sec">
        <div class="owl-carousel hero_slider">
            <!-- <div class="item">
                <div class="video-hero jquery-background-video-wrapper demo-video-wrapper d-none d-md-block">
                    <figure><img rel="preload" src="assets/images/hero_img1.jpg" height="800" width="1920" alt="hero img"></figure>
                </div>
                <div class="video-hero jquery-background-video-wrapper demo-video-wrapper d-block d-md-none">
                    <figure><img rel="preload" src="assets/images/hero_img1.jpg" height="800" width="1920" alt="hero img"></figure>
                </div>
                <div class="hero_cap">
                    <div class="container">
                        <div class="hero_detail">
                            <div class="dtl-wrp">
                                <div class="lft-dtl">
                                    <h2 class="main_title">Powering Health with the Purity of the Sea</h2>
                                    <p>Renowned globally for producing high-quality omega-3-rich fish oils, nutrient-dense fish meals, and sustainable marine products, Arbee combines innovation with a commitment to excellence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="item">
                <div class="video-hero jquery-background-video-wrapper demo-video-wrapper d-none d-md-block">
                    <video class="jquery-background-video" autoplay muted loop playsinline webkit-playsinline preload="auto">
                        <source rel="preload" src="assets/videos/hero_video1.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-hero jquery-background-video-wrapper demo-video-wrapper d-block d-md-none">
                    <video class="jquery-background-video" autoplay muted loop playsinline webkit-playsinline preload="auto">
                        <source rel="preload" src="assets/videos/hero_video1.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="hero_cap">
                    <div class="container">
                        <div class="hero_detail">
                            <div class="lft-dtl">
                                <h2 class="main_title">Powering Health with <br> the Purity of the Sea</h2>
                                <p>Renowned globally for producing high-quality omega-3-rich fish oils, nutrient-dense fish meals, and sustainable marine products, Arbee combines innovation with a commitment to excellence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rgt-btn">
            <a href="#">Explore Our Companies <i><img loading="lazy" src="assets/images/link-arrow.svg" alt="link arrow"></i></a>
            <a href="product-listing.php">Explore Products <i><img loading="lazy" src="assets/images/link-arrow.svg" alt="link arrow"></i></a>
            <a href="contact.php">Contact Us <i><img loading="lazy" src="assets/images/link-arrow.svg" alt="link arrow"></i></a>
        </div>
    </section>

    <!-- Welcome -->
    <section class="welcome_sec">
        <div class="container">
            <div class="grid">
                <div class="wlc-lft typo">
                    <div class="title-wrp">
                        <h1 class="global_title">
                            <small>PURITY | RESPONSIBILITY | INNOVATION </small>
                            <strong>Excellence in Fish Oil & <br> Marine Extract Solutions</strong>
                        </h1>
                        <p>Discover Arbee, India's leader in fish oil extraction and refinement since 1980. Renowned globally for producing high-quality omega-3-rich fish oils, nutrient-dense fish meals, and sustainable marine products, Arbee combines innovation with a commitment to excellence. Explore our legacy of research-driven product development, trusted by clients worldwide.</p>
                    </div>
                    <div class="counter-wrp">
                        <div class="count-item">
                            <strong><span class="counter">45</span>+</strong>
                            <p>Years of Experience & <br> Innovation</p>
                        </div>
                        <div class="count-item">
                            <strong><span class="counter">150</span>+</strong>
                            <p>Expert Team Across <br> APAC</p>
                        </div>
                        <div class="count-item">
                            <strong><span class="counter">6000</span>+</strong>
                            <p>Refined Fish Oil Capacity <br> (MT/Year)</p>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a href="about.php" class="btns">
                            Read More
                        </a>
                        <a href="#" class="btns bdr">
                            Our History
                        </a>
                    </div>
                </div>
                <div class="rgt-vid">
                    <div class="video-box">
                        <video class="jquery-background-video" autoplay muted loop playsinline webkit-playsinline>
                            <source src="assets/videos/welcome_vid1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="video-box">
                        <video class="jquery-background-video" autoplay muted loop playsinline webkit-playsinline>
                            <source src="assets/videos/welcome_vid2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="video-box">
                        <video class="jquery-background-video" autoplay muted loop playsinline webkit-playsinline>
                            <source src="assets/videos/welcome_vid3.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="video-box">
                        <video class="jquery-background-video" autoplay muted loop playsinline webkit-playsinline>
                            <source src="assets/videos/welcome_vid4.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company -->
    <section class="company_sec">
        <div class="container">
            <div class="title-wrp">
                <h2 class="global_title">
                    Arbee Group of Companies
                </h2>
                <p>A network of businesses driving growth and innovation.</p>
            </div>
            <div class="owl-carousel company-slider">
                <div class="item">
                    <a href="#" class="company-box">
                        <figure>
                            <img loading="lazy" src="assets/images/company_img1.webp" width="561" height="730" alt="company img">
                        </figure>
                        <div class="caption">
                            <div class="cap-dtl">
                                <div class="title">
                                    <i><img loading="lazy" src="assets/images/company_ic.svg" alt="company ic"></i>
                                    <h3>arbeeaquatic</h3>
                                </div>
                                <p>Arbee Aquatic Proteins Pvt Ltd is a leading manufacturer of high-protein fish meal. From humble beginnings in fish oil trading, it has grown into a trusted supplier.</p>
                                <div class="arrow">
                                    <img loading="lazy" src="assets/images/arrow_ic.svg" alt="arrrow ic">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="company-box">
                        <figure>
                            <img loading="lazy" src="assets/images/company_img2.webp" width="561" height="730" alt="company img">
                        </figure>
                        <div class="caption">
                            <div class="cap-dtl">
                                <div class="title">
                                    <i><img loading="lazy" src="assets/images/company_ic.svg" alt="company ic"></i>
                                    <h3>arbeebiomarine</h3>
                                </div>
                                <p>Arbee Aquatic Proteins Pvt Ltd is a leading manufacturer of high-protein fish meal. From humble beginnings in fish oil trading, it has grown into a trusted supplier.</p>
                                <div class="arrow">
                                    <img loading="lazy" src="assets/images/arrow_ic.svg" alt="arrrow ic">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="company-box">
                        <figure>
                            <img loading="lazy" src="assets/images/company_img3.webp" width="561" height="730" alt="company img">
                        </figure>
                        <div class="caption">
                            <div class="cap-dtl">
                                <div class="title">
                                    <i><img loading="lazy" src="assets/images/company_ic.svg" alt="company ic"></i>
                                    <h3>arbeecare</h3>
                                </div>
                                <p>Arbee Aquatic Proteins Pvt Ltd is a leading manufacturer of high-protein fish meal. From humble beginnings in fish oil trading, it has grown into a trusted supplier.</p>
                                <div class="arrow">
                                    <img loading="lazy" src="assets/images/arrow_ic.svg" alt="arrrow ic">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality -->
    <section class="quality_sec">
        <div class="container">
            <div class="title-wrp">
                <h2 class="global_title">
                    Quality Marine <br> Products from Arbee
                </h2>
                <p>Arbee offers high-quality marine products produced using advanced processing and strict quality standards. Our range meets global industry requirements, ensuring purity, reliability, and consistent performance. We are committed to delivering premium marine ingredients for diverse industrial and nutritional applications.</p>
            </div>
            <div class="owl-carousel quality-slider">
                <div class="item">
                    <div class="quality-box">
                        <div class="lft-dtl">
                            <h3>Fish Oil</h3>
                            <p>Our crude fish oil retains natural nutrients, supporting livestock, aquaculture growth, and wellness supplement development.</p>
                            <div class="hover-cnt">
                                <h3>Fish Oil</h3>
                                <p>Our crude fish oil retains natural nutrients, supporting livestock, aquaculture growth, and wellness supplement development.</p>
                            </div>
                            <div class="btn-wrp">
                                <a href="#">Enquire Now <i><img loading="lazy" src="assets/images/green-arrow.svg" alt="link arrow"></i></a>
                                <a href="product-detail.php">View Details <i><img loading="lazy" src="assets/images/green-arrow.svg" alt="link arrow"></i></a>
                            </div>
                        </div>
                        <figure>
                            <img loading="lazy" src="assets/images/quality_img1.jpg" width="330" height="511" alt="quality img">
                        </figure>
                        <div class="curve">
                            <img loading="lazy" src="assets/images/quality_curve.svg" alt="curve">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="quality-box">
                        <div class="lft-dtl">
                            <h3>Omega 3 Refined <br> Fish Oil</h3>
                            <p>Unlock the powerful benefits of Omega-3 with Arbee's refined fish oil. Carefully processed to maintain potency and purity, our refined fish oil supports heart health, cognitive function, and overall wellness.</p>
                            <div class="hover-cnt">
                                <h3>Omega 3 Refined <br> Fish Oil</h3>
                                <p>Unlock the powerful benefits of Omega-3 with Arbee's refined fish oil. Carefully processed to maintain potency and purity, our refined fish oil supports heart health, cognitive function, and overall wellness.</p>
                            </div>
                            <div class="btn-wrp">
                                <a href="#">Enquire Now <i><img loading="lazy" src="assets/images/green-arrow.svg" alt="link arrow"></i></a>
                                <a href="product-detail.php">View Details <i><img loading="lazy" src="assets/images/green-arrow.svg" alt="link arrow"></i></a>
                            </div>
                        </div>
                        <figure>
                            <img loading="lazy" src="assets/images/quality_img2.jpg" width="361" height="511" alt="quality img">
                        </figure>
                        <div class="curve">
                            <img loading="lazy" src="assets/images/quality_curve.svg" alt="curve">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="quality-box">
                        <div class="lft-dtl">
                            <h3>Fish Meal</h3>
                            <p>A nutritional powerhouse for animal feed, Arbee's fish meal is crafted from fresh, high-quality Sardine, rich in essential amino acids, fatty acids, and minerals.</p>
                            <div class="hover-cnt">
                                <h3>Fish Meal</h3>
                                <p>A nutritional powerhouse for animal feed, Arbee's fish meal is crafted from fresh, high-quality Sardine, rich in essential amino acids, fatty acids, and minerals.</p>
                            </div>
                            <div class="btn-wrp">
                                <a href="#">Enquire Now <i><img loading="lazy" src="assets/images/green-arrow.svg" alt="link arrow"></i></a>
                                <a href="product-detail.php">View Details <i><img loading="lazy" src="assets/images/green-arrow.svg" alt="link arrow"></i></a>
                            </div>
                        </div>
                        <figure>
                            <img loading="lazy" src="assets/images/quality_img3.jpg" width="361" height="511" alt="quality img">
                        </figure>
                        <div class="curve">
                            <img loading="lazy" src="assets/images/quality_curve.svg" alt="curve">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate -->
    <section class="certificate_sec">
        <div class="container">
            <div class="title-wrp">
                <h2 class="global_title">
                    Certifications
                </h2>
                <p>Certifications at Arbee Marine reflect our strong commitment to quality.</p>
            </div>
        </div>
        <div class="certificate-slider splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo1.png" width="328" height="328" alt="certi logo">
                            </figure>
                            <h3>ISO</h3>
                            <p>Represents global standards for quality, safety, and efficiency, demonstrating Arbee's commitment to excellence.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo2.png" width="328" height="328" alt="certi logo">
                            </figure>
                            <h3>GMP</h3>
                            <p>Ensures consistent, high-quality manufacturing processes that meet rigorous safety and reliability standards.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo3.png" width="328" height="328" alt="certi logo">
                            </figure>
                            <h3>FDA</h3>
                            <p>Compliant with international food and drug safety standards, reflecting our dedication to consumer health.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo4.png" width="324" height="324" alt="certi logo">
                            </figure>
                            <h3>HALAL</h3>
                            <p>Arbee proudly holds Halal Certification, ensuring that all our products meet the strict standards of Halal compliance.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo5.png" width="328" height="328" alt="certi logo">
                            </figure>
                            <h3>FRIEND OF THE SEA</h3>
                            <p>A certification for sustainable fishing and aquaculture, safeguarding marine biodiversity and promoting eco-friendly practices.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo6.png" width="224" height="324" alt="certi logo">
                            </figure>
                            <h3>GOED MEMBER</h3>
                            <p>As a GOED member, Arbee supports innovation in omega-3 products, ensuring premium EPA and DHA offerings.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="certificate-card">
                            <figure>
                                <img loading="lazy" src="assets/images/certi-logo7.png" width="386" height="133" alt="certi logo">
                            </figure>
                            <h3>IFFO</h3>
                            <p>Aligned with the global marine ingredient trade association, Arbee upholds sustainable and ethical sourcing practices.</p>
                        </div>
                    </li>
                </ul>   
            </div>
        </div>
    </section>

    <!-- Trusted -->
    <section class="trusted_sec">
        <div class="row">
            <div class="col-lg-5">
                <div class="lft-img">
                    <figure>
                        <img loading="lazy" src="assets/images/trusted_img.jpg" width="683" height="1080" alt="trusted img">
                    </figure>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="right-part">
                    <div class="title-wrp">
                        <h2 class="global_title">Delivering Trusted Quality</h2>
                        <p>At Arbee, quality drives everything we do. Through advanced R&D and world-class manufacturing, we deliver refined Omega-3 fish oil and nutrient-rich fish meals that meet global standards, ensuring purity, sustainability, and innovation.</p>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                                    <i><img loading="lazy" src="assets/images/trust_ic1.svg" alt="faq ic"></i>
                                    Quality Standard
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse" role="region" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body typo">
                                    <p>Sustainability is woven into all we do at arbee. from renewable energy and waste reduction to water conservation, we prioritize eco-friendly practices across our facilities. these sustainable initiatives not only help minimize our environmental footprint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    <i><img loading="lazy" src="assets/images/trust_ic2.svg" alt="faq ic"></i>
                                    Sustainable Innovation
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse show" role="region" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body typo">
                                    <p>Sustainability is woven into all we do at arbee. from renewable energy and waste reduction to water conservation, we prioritize eco-friendly practices across our facilities. these sustainable initiatives not only help minimize our environmental footprint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    <i><img loading="lazy" src="assets/images/trust_ic3.svg" alt="faq ic"></i>
                                    Responsible Sourcing
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" role="region" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body typo">
                                    <p>Sustainability is woven into all we do at arbee. from renewable energy and waste reduction to water conservation, we prioritize eco-friendly practices across our facilities. these sustainable initiatives not only help minimize our environmental footprint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    <i><img loading="lazy" src="assets/images/trust_ic4.svg" alt="faq ic"></i>
                                    Eco Production
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" role="region" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body typo">
                                    <p>Sustainability is woven into all we do at arbee. from renewable energy and waste reduction to water conservation, we prioritize eco-friendly practices across our facilities. these sustainable initiatives not only help minimize our environmental footprint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Future -->
    <section class="future_sec">
        <div class="container">
            <div class="title-wrp">
                <h2 class="global_title">
                    Committed to A Sustainable Future
                </h2>
                <p>At Arbee, we deliver high-quality Omega-3 fish oil and fish meals with purity, sustainability, and innovation.</p>
            </div>
        </div>
        <div class="future-in">
            <picture>
                <source srcset="assets/images/future_bg1.webp" type="image/webp">
                <img class="bg-defult" src="assets/images/future_bg1.webp" width="1921" height="754" alt="future img" loading="lazy">
            </picture>
            <!-- <img loading="lazy" class="bg-defult" src="assets/images/future_bg1.webp" width="1921" height="754" alt="future img"> -->
            <div class="grid">
                <div class="item">
                    <div class="future_block">
                        <div class="future-box">
                            <i>
                                <img loading="lazy" src="assets/images/future_ic1.svg" alt="future img">
                            </i>
                            <div class="dtl-wrp">
                                <h3>Safeguarding Marine Life</h3>
                                <p>We are deeply committed to preserving the world's oceans through FIP Initiatives, Eco-labelling and General Awareness Campaigns.</p>
                            </div>
                        </div>
                    </div>
                    <picture>
                        <source srcset="assets/images/future_bg1.webp" type="image/webp">
                        <img class="bg-hover" src="assets/images/future_bg1.webp" width="1921" height="754" alt="future img" loading="lazy">
                    </picture>
                    <!-- <img loading="lazy" class="bg-hover" src="assets/images/future_bg1.webp" width="1921" height="754" alt="future img"> -->
                </div>
                <div class="item">
                    <div class="future_block">
                        <div class="future-box">
                            <i>
                                <img loading="lazy" src="assets/images/future_ic2.svg" alt="future img">
                            </i>
                            <div class="dtl-wrp">
                                <h3>Responsible Resource Management</h3>
                                <p>We are deeply committed to preserving the world's oceans through FIP Initiatives, Eco-labelling and General Awareness Campaigns.</p>
                            </div>
                        </div>
                    </div>
                    <picture>
                        <source srcset="assets/images/future_bg2.webp" type="image/webp">
                        <img class="bg-hover" src="assets/images/future_bg2.webp" width="1921" height="754" alt="future img" loading="lazy">
                    </picture>
                    <!-- <img loading="lazy" class="bg-hover" src="assets/images/future_bg2.webp" width="1921" height="754" alt="future img"> -->
                </div>
                <div class="item">
                    <div class="future_block">
                        <div class="future-box">
                            <i>
                                <img loading="lazy" src="assets/images/future_ic3.svg" alt="future img">
                            </i>
                            <div class="dtl-wrp">
                                <h3>Powering a Sustainable Future</h3>
                                <p>We are deeply committed to preserving the world's oceans through FIP Initiatives, Eco-labelling and General Awareness Campaigns.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <img loading="lazy" class="bg-hover" src="assets/images/future_bg3.webp" width="1921" height="754" alt="future img"> -->
                    <picture>
                        <source srcset="assets/images/future_bg3.webp" type="image/webp">
                        <img class="bg-hover" src="assets/images/future_bg3.webp" width="1921" height="754" alt="future img" loading="lazy">
                    </picture>
                </div>
                <div class="item">
                    <div class="future_block">
                        <div class="future-box">
                            <i>
                                <img loading="lazy" src="assets/images/future_ic4.svg" alt="future img">
                            </i>
                            <div class="dtl-wrp">
                                <h3>Capturing Rainwater for Conservation</h3>
                                <p>We are deeply committed to preserving the world's oceans through FIP Initiatives, Eco-labelling and General Awareness Campaigns.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <img loading="lazy" class="bg-hover" src="assets/images/future_bg4.webp" width="1921" height="754" alt="future img"> -->
                    <picture>
                        <source srcset="assets/images/future_bg4.webp" type="image/webp">
                        <img class="bg-hover" src="assets/images/future_bg4.webp" width="1921" height="754" alt="future img" loading="lazy">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry -->
    <section class="industry_sec">
        <div class="container">
            <div class="title-wrp">
                <h2 class="global_title">Latest Industry Insights</h2>
                <p>Insights and updates shaping the marine and fish oil industry.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="product-detail.php" class="industry-item">
                        <div class="lft-part">
                            <figure>
                                <img loading="lazy" src="assets/images/industry_img1.jpg" width="398" height="432" alt="industry img">
                            </figure>
                            <div class="date">
                                <strong>10</strong>
                                <span>MAR</span>
                            </div>
                        </div>
                        <div class="rgt-part">
                            <div class="label">
                                <span>EVENTS</span>
                            </div>
                            <h3>From Ocean to Opportunity: The Hands Behind Arbee's Marine Innovation</h3>
                            <p>A glimpse into the lives, stories, and dedication of the people..</p>
                            <div class="readmore">Read More <i><img loading="lazy" src="assets/images/readmore-arrow.svg" alt="arrow ic"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="product-detail.php" class="industry-item">
                        <div class="lft-part">
                            <figure>
                                <img loading="lazy" src="assets/images/industry_img2.jpg" width="398" height="432" alt="industry img">
                            </figure>
                            <div class="date">
                                <strong>10</strong>
                                <span>MAR</span>
                            </div>
                        </div>
                        <div class="rgt-part">
                            <div class="label">
                                <span>Industry Insights</span>
                            </div>
                            <h3>The Golden Drop: Unlocking the Myriad Health Benefits of Fish Oil</h3>
                            <p>From heart health to brain power, discover how this essential supplem...</p>
                            <div class="readmore">Read More <i><img loading="lazy" src="assets/images/readmore-arrow.svg" alt="arrow ic"></i></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <a href="product-listing.php" class="btns blue-bdr">View All <i><img loading="lazy" src="assets/images/btn-arrow.svg" alt="arrow ic"></i></a>
            </div>
        </div>
    </section>

</div>

<!-- Splide Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.2/js/splide.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js" defer></script>

<!-- hero Slider -->
<script>
    $(document).ready(function() {
        var owl = $('.hero_slider');
            owl.owlCarousel({
                margin: 0,
                loop: false,
                dots: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayDelay: 3000,
                items: 1,
        });
    });
</script>

<!-- Company Slider -->
<script>
    $(document).ready(function() {
        var owl = $('.company-slider');
            owl.owlCarousel({
                margin: 18,
                loop: false,
                dots: false,
                nav: true,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayDelay: 3000,
                items: 3,
                responsive: {
                    0: { items: 1, dots: true, nav: false },
                    576: { items: 2, dots: true, nav: false },
                    768: { items: 3, margin: 14, dots: true, nav: false },
                    992: { items: 3, margin: 18, dots: false, nav: true }
                },
        });
    });
</script>

<!-- Quality Slider -->
<script>
    $(document).ready(function () {
        var owl = $('.quality-slider');
        owl.owlCarousel({
            margin: 18,
            loop: false,
            dots: true,
            nav: false,
            autoplay: false,
            items: 3,
            responsive: {
                0: { items: 1, },
                576: { items: 2, },
                768: { items: 2, },
                992: { items: 2, margin: 15, },
                1200: { items: 3, margin: 15, },
                1552: { items: 3, margin: 18, }
            },
            onInitialized: setFirstActive,
            onTranslated: setFirstActive
        });
        function isDesktop() {
            return $(window).width() >= 768;
        }
        function setFirstActive() {
            $('.quality-slider .owl-item').removeClass('active-item');
            if (isDesktop()) {
                $('.quality-slider .owl-item.active')
                    .first()
                    .addClass('active-item');
            }
        }
        $(document).on('mouseenter', '.quality-slider .owl-item.active', function () {
            if (!isDesktop()) return;
            $('.quality-slider .owl-item').removeClass('active-item');
            $(this).addClass('active-item');
        });
        $(document).on('mouseleave', '.quality-slider .owl-item.active', function () {
            if (!isDesktop()) return;
            setFirstActive();
        });
        $(window).on('resize', setFirstActive);
    });
</script>

<!-- Counter -->
<script src="assets/js/jquery.countup.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>

<!-- Counter -->
<script> 
    $('.counter').countup();
</script>

<!-- Certificate Slider -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Splide('.certificate-slider', {
            type   : 'loop',
            focus  : false,
            gap    : 30,
            arrows : false,
            pagination: false,
            autoWidth: true,
            drag   : false,
            autoScroll: {
                speed: 2.4,
                pauseOnHover: true,
                pauseOnFocus: false,
            },
            breakpoints: {
                1779: { gap: 24, speed: 2.4 },
                1551: { gap: 20, speed: 2.4 },
                1199: { gap: 18, speed: 2.4 },
                991: { gap: 15, speed: 3.5, },
                767: { perPage: 2, gap: 10, speed: 3.5, },
                575: { perPage: 1 }
            }
        }).mount(window.splide.Extensions);
    });
</script>

<?php include "./includes/footer.php" ?>