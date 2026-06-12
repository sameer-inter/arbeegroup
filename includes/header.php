<header id="Header">
    <div id="HeaderMain">
        <div class="container">
            <div class="mainFlx">
                <div class="lftSd">
                    <a href="index1.php" class="logo" aria-label="Logo">
                        <img rel="preload" src="assets/images/logo.svg" width="154" height="95" alt="logo">
                    </a>
                </div>
                <div class="rgtSd">
                    <div class="cNavOuter2" id="CNavPOP2">
                        <div class="cNavWrap">
                            <button type="button" class="cNacBtn close" aria-labelledby="CNavPOP">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="accordion" id="AccordMenu">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="index1.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index1' ? ' active' : '' ?>"
                                            aria-label="Home button">
                                            <span>HOME</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="about.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'about' ? ' active' : '' ?>"
                                            aria-label="About button">
                                            <span>ABOUT</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="product-listing.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'product-listing' ? ' active' : '' ?>"
                                            aria-label="Products button">
                                            <span>PRODUCTS</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="technology.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'technology' ? ' active' : '' ?>"
                                            aria-label="Technology button">
                                            <span>TECHNOLOGY</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="sustainability.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'sustainability' ? ' active' : '' ?>"
                                            aria-label="Sustainability button">
                                            <span>SUSTAINABILITY</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '' ? ' active' : '' ?>"
                                            aria-label="Subsidiaries button">
                                            <span>SUBSIDIARIES</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="news.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'news' ? ' active' : '' ?>"
                                            aria-label="News button">
                                            <span>NEWS</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="contact.php"
                                            class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'contact' ? ' active' : '' ?>"
                                            aria-label="connect button">
                                            <span>CONNECT</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="accordion-item hasAcco">
                                    <div class="accordion-header">
                                        <a href="#" class="accordion-button" aria-label="nav">
                                            <span id="dropdown1">CONNECT</span>
                                        </a>
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                                            aria-labelledby="dropdown1"></button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="dropdown1"
                                        data-bs-parent="#AccordMenu">
                                        <div class="accordion-body">
                                            <ul class="submenu">
                                                <li><a href="#">CONNECT 1</a></li>
                                                <li><a href="#">CONNECT 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="cNacBtnWrap d-none d-xl-block">
                                <button type="button" class="cNacBtn" aria-label="menu button">
                                    <span class="hamburger-lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="cNavOuter" id="CNavPOP">
                        <div class="cNavWrap">
                            <button type="button" class="cNacBtn close" aria-labelledby="CNavPOP">
                                <span class="hamburger-lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                            <div class="accordion" id="menu2_AccordMenu">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="index1.php" class="accordion-button  active" aria-label="Home button">
                                            <span>Home</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="about.php" class="accordion-button" aria-label="About button">
                                            <span>About</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="product-listing.php" class="accordion-button" aria-label="Products button">
                                            <span>Products</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="technology.php" class="accordion-button" aria-label="Technology button">
                                            <span>Technology</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="sustainability.php" class="accordion-button" aria-label="Sustainability button">
                                            <span>Sustainability</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#" class="accordion-button" aria-label="Subsidiaries button">
                                            <span>Subsidiaries</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="news.php" class="accordion-button" aria-label="News button">
                                            <span>News</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="contact.php" class="accordion-button" aria-label="connect button">
                                            <span>connect</span>
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- <div class="accordion-item hasAcco">
                                    <div class="accordion-header">
                                        <a href="#" class="accordion-button">
                                            <span id="menu2_dropdown5">connect</span>
                                        </a>
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menu2_collapseFive" aria-controls="menu2_collapseFive" aria-labelledby="menu2_dropdown5"></button>
                                    </div>
                                    <div id="menu2_collapseFive" class="accordion-collapse collapse" aria-labelledby="menu2_dropdown5" data-bs-parent="#menu2_AccordMenu">
                                        <div class="accordion-body">
                                            <ul class="submenu">
                                                <li><a href="#">Floss 1</a></li>
                                                <li><a href="#">Floss 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="curve">
                                <img loading="lazy" src="assets/images/sidebar_curve.svg" alt="curve">
                            </div>
                        </div>
                    </div>
                    <div class="cNacBtnWrap d-block d-xl-none">
                        <button type="button" class="cNacBtn" aria-label="menu button">
                            <span class="hamburger-lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
// HEADER
document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('Header');
    let prevScroll = window.scrollY || document.documentElement.scrollTop;
    let prevDirection = 0;
    const threshold = 200;

    window.addEventListener('scroll', () => {
        const curScroll = window.scrollY || document.documentElement.scrollTop;
        const curDirection = curScroll > prevScroll ? 2 : 1;

        if (curScroll === 0) {
            header.classList.remove('sticky');
        }

        if (curDirection !== prevDirection) {
            if (curDirection === 2 && curScroll > threshold) {
                header.classList.add('hide');
                header.classList.remove('sticky');
            } else if (curDirection === 1) {
                header.classList.remove('hide');
                header.classList.add('sticky');
            }
            prevDirection = curDirection;
        }

        prevScroll = curScroll;
    }, {
        passive: true
    });

    document.querySelectorAll('.cNacBtn').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.cNacBtn').forEach(btn => btn.classList.toggle('open'));
            document.getElementById('CNavPOP').classList.toggle('show');
            document.body.classList.toggle('cPop-open');
        });
    });
});
</script>

<div id="viewport">