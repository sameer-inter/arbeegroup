<?php include "main.php" ?>

<div id="pageWrapper" class="ProductListingPage">
    
    <!-- Inner Banner -->
    <section class="inner_banner">
        <!-- Web -->
        <div class="d-none d-md-block">
            <img loading="lazy" class="bg" src="assets/images/product-listing_banner.jpg" alt="banner img">
        </div>
        <!-- Mobile -->
        <div class="d-block d-md-none">
            <img loading="lazy" class="bg" src="assets/images/product-listing_banner.jpg" alt="banner img">
        </div>
        <div class="inner_cap">
            <div class="container">
                <div class="cap_dtl">
                    <h1 class="main_title">Our Products</h1>
                </div>
            </div>
        </div>
    </section>

        
        <!-- Product Listing -->
    <section class="product_listing">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="lft-tab">
                        <ul class="breadcrumb">
                            <li><a href="index1.php">Home</a></li>
                            <li>Products</li>
                        </ul>
                        <div class="scroll">
                            <ul class="nav nav-tabs" id="productTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fish-meal-tab" data-bs-toggle="tab" data-bs-target="#fish-meal" type="button" role="tab" aria-controls="fish-meal" aria-selected="true">
                                        Fish Meal
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="crude-fish-oil-tab" data-bs-toggle="tab" data-bs-target="#crude-fish-oil" type="button" role="tab" aria-controls="crude-fish-oil" aria-selected="false">
                                        Crude Fish Oil
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="refined-fish-oil-tab" data-bs-toggle="tab" data-bs-target="#refined-fish-oil" type="button" role="tab" aria-controls="refined-fish-oil" aria-selected="false">
                                        Refined Fish Oil
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="right-dtl">
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="fish-meal" role="tabpanel" aria-labelledby="fish-meal-tab">
                                <div class="tab-dtl">
                                    <div class="grid">
                                        <div class="dtl typo">
                                            <h2 class="global_title small">
                                                Fish Meal
                                            </h2>
                                            <p>A nutritional powerhouse for animal feed, Arbee's fish meal is crafted from fresh, high-quality Sardine, rich in essential amino acids, fatty acids, and minerals. Engineered to boost growth in aquaculture and animal breeding, our fish meal is designed to meet rigorous standards for exceptional quality and consistency.</p>
                                            <a href="product-detail.php" class="btns">
                                                Read More
                                            </a>
                                        </div>
                                        <figure>
                                            <img loading="lazy" src="assets/images/product_img1.jpg" alt="product img">
                                        </figure>
                                    </div>
                                    <div class="curve">
                                        <img loading="lazy" src="assets/images/product_curve.svg" alt="curve">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="crude-fish-oil" role="tabpanel" aria-labelledby="crude-fish-oil-tab">
                                <div class="tab-dtl">
                                    <div class="grid">
                                        <div class="dtl typo">
                                            <h2 class="global_title small">
                                                Crude Fish Oil
                                            </h2>
                                            <p>A nutritional powerhouse for animal feed, Arbee's fish meal is crafted from fresh, high-quality Sardine, rich in essential amino acids, fatty acids, and minerals. Engineered to boost growth in</p>
                                            <a href="product-detail.php" class="btns">
                                                Read More
                                            </a>
                                        </div>
                                        <figure>
                                            <img loading="lazy" src="assets/images/product_img1.jpg" alt="product img">
                                        </figure>
                                    </div>
                                    <div class="curve">
                                        <img loading="lazy" src="assets/images/product_curve.svg" alt="curve">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="refined-fish-oil" role="tabpanel" aria-labelledby="refined-fish-oil-tab">
                                <div class="tab-dtl">
                                    <div class="grid">
                                        <div class="dtl typo">
                                            <h2 class="global_title small">
                                                Refined Fish Oil
                                            </h2>
                                            <p>A nutritional powerhouse for animal feed, Arbee's fish meal is crafted from fresh, high-quality Sardine,</p>
                                            <a href="product-detail.php" class="btns">
                                                Read More
                                            </a>
                                        </div>
                                        <figure>
                                            <img loading="lazy" src="assets/images/product_img1.jpg" alt="product img">
                                        </figure>
                                    </div>
                                    <div class="curve">
                                        <img loading="lazy" src="assets/images/product_curve.svg" alt="curve">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Tab Dot -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabButtons = document.querySelectorAll("#productTab .nav-link");
        const pagination = document.querySelector(".tab-pagination");
        tabButtons.forEach((tab, index) => {
            const dot = document.createElement("button");
            dot.classList.add("tab-dot");
            if (tab.classList.contains("active")) {
                dot.classList.add("active");
            }
            dot.dataset.tab = tab.dataset.bsTarget;
            dot.addEventListener("click", function () {
                bootstrap.Tab.getOrCreateInstance(tab).show();
            });
            pagination.appendChild(dot);
        });
        tabButtons.forEach(tab => {
            tab.addEventListener("shown.bs.tab", function () {
                document.querySelectorAll(".tab-dot").forEach(dot => {
                    dot.classList.remove("active");
                });
                const activeDot = document.querySelector(
                    `.tab-dot[data-tab="${this.dataset.bsTarget}"]`
                );
                if (activeDot) {
                    activeDot.classList.add("active");
                }
            });
        });
    });
</script>

<!-- Tab scroll -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth > 768) return;
        const containers = document.querySelectorAll('.scroll');
        containers.forEach(container => {
            const tabs = container.querySelectorAll('.nav-link');
            tabs.forEach(tab => {
                tab.addEventListener('shown.bs.tab', function () {
                    tab.scrollIntoView({
                        behavior: 'smooth',
                        inline: 'center',
                        block: 'nearest'
                    });
                });
            });
        });
    });
</script>

<?php include "./includes/footer.php" ?>