<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <noscript>
        <style type="text/css">
        .no-js {
            display: none !important;
        }
        </style>
    </noscript>
    <title>Arbee Group</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    
    <meta name="robots" content="noindex, nofollow, max-image-preview:large">
    <meta name="author" content="Arbee Group">
    <meta name="keywords" content="Home">
    <meta name="description" content="Arbee Group">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Arbee Group">
    <meta property="og:image" content="assets/images/og_image.jpg">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1000">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:description" content="Arbee Group">

    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0089CF">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0089CF">
    <meta name="msapplication-TileColor" content="#0089CF">
    <meta name="msapplication-navbutton-color" content="#0089CF">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0089CF">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png ">

    <style>
    /* Inline critical CSS here */
    .owl-carousel:not(.owl-loaded), .swiper:not(.swiper-initialized), .splide:not(.is-initialized) {
        opacity: 0;
    }

    #preloader {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 999999;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.6s ease;
        pointer-events: none;
        backdrop-filter: blur(21px);
    }
    #preloader.hiding {
        opacity: 0;
        visibility: hidden;
    }
    #preloader .circle {
        position: absolute;
        width: 100vw;
        height: 100vh;
        background: #fff;
        border-radius: 0;
        box-shadow: 0 0 0 100vw #fff;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform;
    }
    #preloader .circle.scale {
        transform: scale(3);
    }
    #preloader .logo {
        width: 175px;
        height: auto;
        z-index: 1;
        position: relative;
        transition: opacity 0.3s ease;
        animation: rotateScale 10s linear infinite
    }
    .spin-loader {
        animation: spin 1s linear infinite;
        transform-origin: center;
    }
    @keyframes spin {
        100% { transform: rotate(360deg); }
    }
    /* .logo.fade {
        opacity: 0;
    } */

    figure {
        margin: 0;
    }
    </style>
    <script>
        // VIEWPORT HEIGHT
        const appHeight = () => document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)
        window.addEventListener('resize', function() {
            appHeight();
        });
        document.addEventListener("DOMContentLoaded", function() {
            appHeight();
        });

        (function() {
            document.querySelectorAll('.no-js').forEach(function(element) {
                element.classList.remove('no-js');
            });
        })();
        //SITE LOADER
        function hidePreloader() {
            const preloader = document.getElementById("preloader");
            const circle = document.querySelector(".circle");
            const logo = document.querySelector(".logo");
            setTimeout(() => {
                circle.classList.add("scale");
            }, 200);
            setTimeout(() => {
                preloader.classList.add("hiding");
            }, 400);
            setTimeout(() => {
                preloader.style.display = "none";
                document.body.style.overflowX = "hidden";
            }, 1000);
        }
        if (document.readyState === 'loading') {
            document.addEventListener("DOMContentLoaded", hidePreloader);
        } else {
            hidePreloader();
        }
    </script>

    <!-- PRECONNECTING MOST USED DOMAIN --->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://ux.intersmarthosting.in">
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Owl Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet">

    <!-- Splide Carousel -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.2/css/splide.min.css" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Fancy Select -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <!-- Number -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>

    <!-- Owl Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>

    <!-- LAZY LOAD -->
    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js" defer onload="initializeLazyLoad()"></script>
    <script>
        function initializeLazyLoad() {
            var lazyLoadInstance = new LazyLoad({});
        }
    </script>
    <link id="AppStyle" rel="preload" href="assets/css/app.min.css?v=1.0.0" type="text/css" as="style"
        onload="this.onload=null; this.rel='stylesheet';" media='all' />
</head>

<body class="<?= in_array($page = basename($_SERVER['SCRIPT_FILENAME'], '.php'), ['404']) ? 'header_relative ' : ''; echo in_array($page, ['news-detail','privacy']) ? 'no-banner' : ''; ?>" style="overflow-x: hidden;">

    <div id="preloader">
        <div class="circle">
        </div>
        <img decoding="async" class="logo" src="assets/images/loader.svg" style="width: 108px;height: auto; z-index: 1;" width="108" height="92" alt="logo">
    </div>

    <?php include "includes/header.php" ?>