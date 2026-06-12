<?php include "main.php" ?>

<div id="pageWrapper" class="ContactPage">
    
    <!-- Inner Banner -->
    <section class="inner_banner">
        <!-- Web -->
        <div class="d-none d-md-block">
            <img loading="lazy" class="bg" src="assets/images/contact_banner.jpg" alt="banner img">
        </div>
        <!-- Mobile -->
        <div class="d-block d-md-none">
            <img loading="lazy" class="bg" src="assets/images/contact_banner.jpg" alt="banner img">
        </div>
        <div class="inner_cap">
            <div class="container">
                <div class="cap_dtl">
                    <h1 class="main_title">Connect Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Bread Crumb -->
    <section>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index1.php">Home</a></li>
                <li>Connect</li>
            </ul>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="lft-dtl">
                        <h2 class="global_title">Contact Info</h2>
                        <p>Connect with us for any inquiries or support.</p>
                        <div class="location-info">
                            <div class="label">
                                <i><img loading="lazy" src="assets/images/map_ic.svg" alt="map ic"></i>
                                <span>Location</span>
                            </div>
                            <p>Arbee Agencies, 405B/IX, Karippadom <br> P.O,Thalayolaparambu, Kottayam, <br> Kerala - 686605.</p>
                        </div>
                        <div class="location-info">
                            <div class="label">
                                <i><img loading="lazy" src="assets/images/call_ic.svg" alt="call ic"></i>
                                <span>Call Us</span>
                            </div>
                            <p><a href="tel:+914829237430">+91 482 9237430</a></p>
                            <p><a href="tel:+914829237430">+91 482 9237430</a></p>
                        </div>
                        <div class="location-info">
                            <div class="label">
                                <i><img loading="lazy" src="assets/images/mail_ic20x.svg" alt="mail ic"></i>
                                <span>Email</span>
                            </div>
                            <p><a href="mailto:digital@arbeeglobal.com">digital@arbeeglobal.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62892.64003345348!2d76.29935619517855!3d9.867978007259977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08718af0000001%3A0x443503955ce474d5!2sArbee%20Aquatic%20Proteins%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1781169445555!5m2!1sen!2sin" width="1138" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact_form">
        <video class="contact-bg" autoplay="" muted="" loop="" playsinline="" rel="preload">
            <source rel="preload" src="assets/videos/brand-bg.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="form-in">
                <div class="title-wrp">
                    <h2 class="global_title text-white">Contact Form</h2>
                    <p>Have questions or need assistance? Connect with us for reliable support and prompt responses from our team.</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ic">
                                <div class="input-group">
                                    <i><img loading="lazy" src="assets/images/name_ic.svg" alt="name ic"></i>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group phone">
                                <div class="input-group">
                                    <input type="tel" id="mobile_code" name="mobile_code" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group ic">
                                <div class="input-group">
                                    <i><img loading="lazy" src="assets/images/mail_ic.svg" alt="mail ic"></i>
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btns white" type="submit">Enquiry Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

<!-- Phone code -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const input = document.querySelector("#mobile_code");
        const inputGroup = document.querySelector(".form-group.phone");
        const itiInstance = window.intlTelInput(input, {
            initialCountry: "in",
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        });
        const observer = new MutationObserver(mutations => {
            mutations.forEach(mutation => {
                mutation.addedNodes.forEach(node => {
                    if (node.classList && node.classList.contains('iti--container')) {
                        inputGroup.appendChild(node);
                    }
                });
            });
        });
        observer.observe(document.body, { childList: true });
        input.addEventListener('focus', () => {
            const itiContainer = document.querySelector(".iti--container");
            if (itiContainer) {
                inputGroup.appendChild(itiContainer);
            }
        });
    });
</script>

<?php include "./includes/footer.php" ?>