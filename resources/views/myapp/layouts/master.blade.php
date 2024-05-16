<!DOCTYPE html>
<html lang="en">
    @include("myapp.layouts.head")
<body>
<header>
        <div>
            <button class="btn1"><a href="login.html">Login</a></button>
            <button class="btn1"><a href="sign up.html">Sign up</a></button>
        </div>
    </header>

@include("myapp.layouts.header")


    <!-- heading section start here -->
    <section id="heading-section">
        <div id="text-body">
            <div class="text-animation">
                <h1 class="font-weight-bold">Engineering</h1>
            </div>
            <div class="text-animation">
                <span>
                    <h1 class="font-weight-bold">Your Best Design</h1>
                </span>
            </div>
        </div>

        <section class="search-part">
            <div id="search">
                <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
                    <rect class="bar" />

                    <g class="magnifier">
                        <circle class="glass" />
                        <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
                    </g>

                    <g class="sparks">
                        <circle class="spark" />
                        <circle class="spark" />
                        <circle class="spark" />
                    </g>

                    <g class="burst pattern-one">
                        <circle class="particle circle" />
                        <path class="particle triangle" />
                        <circle class="particle circle" />
                        <path class="particle plus" />
                        <rect class="particle rect" />
                        <path class="particle triangle" />
                    </g>
                    <g class="burst pattern-two">
                        <path class="particle plus" />
                        <circle class="particle circle" />
                        <path class="particle triangle" />
                        <rect class="particle rect" />
                        <circle class="particle circle" />
                        <path class="particle plus" />
                    </g>
                    <g class="burst pattern-three">
                        <circle class="particle circle" />
                        <rect class="particle rect" />
                        <path class="particle plus" />
                        <path class="particle triangle" />
                        <rect class="particle rect" />
                        <path class="particle plus" />
                    </g>
                </svg>
                <input type=search name=q aria-label="Search for inspiration" placeholder="serach your  Designer" />
            </div>
        </section>
    </section>

    <!--------------------- hero section ----------->
    <section id="Engineering-part">
        <h1 class="main-title">Professtional Engineers</h1>
        <p class="main-para">Engineering Archtecture New Modern Designers</p>

        <div class="latest-products">

            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="./design-detals.html"><img src="asset/image/pro1.jpg" alt="" class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="./design-detals.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="./design-detals.html">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                </div>
                                <h6>$25.75</h6>
                                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (24)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="./design-detals.html"><img src="asset/image/pro2.jpg" alt=""class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="./design-detals.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="./design-detals.html">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                </div>
                                <h6>$30.25</h6>
                                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (21)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="engineer_project.html"><img src="asset/image/pro3.jpg" alt=""class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="engineer_project.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="engineer_project.html">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                </div>
                                <h6>$20.45</h6>
                                <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (36)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="engineer_project.html"><img src="asset/image/pro4.jpg" alt=""class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="engineer_project.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="engineer_project.html">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                </div>
                                <h6>$15.25</h6>
                                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (48)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="engineer_project.html"><img src="asset/image/pro5.jpg" alt=""class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="engineer_project.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="engineer_project.html">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                </div>
                                <h6>$12.50</h6>
                                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (16)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="engineer_project.html"><img src="asset/image/pro6.jpg" alt=""class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="engineer_project.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="engineer_project.html">
                                        <h4>Tittle goes here</h4>
                                    </a>
                                </div>
                                <h6>$22.50</h6>
                                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (32)</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- us section -->
    <section id="us">
        <h1>Why Choose Us</h1>
        <p class="us-para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi modi
            porro earum labore voluptates
        </p>
        <p class="us-para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam atque aut
            enim.
        </p>
        <div id="us-cart-wrapper">
            <div class="cart">
                <div class="card-header">
                    <div class="icons">
                        <img src="asset/Image/ico1.png" alt="icon1" />
                    </div>
                    <h4>We Deliver Quality</h4>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>

            <div class="cart">
                <div class="icons">
                    <img src="asset/Image/ico2.png" alt="icon2" />
                </div>
                <h4>alwasy on time</h4>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>

            <div class="cart">
                <div class="icons">
                    <img src="asset/Image/ico3.png" alt="icon3" />
                </div>
                <h4>We Are Pasionate</h4>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>

            <div class="cart">
                <div class="icons">
                    <img src="asset/Image/ico4.png" alt="icon4" />
                </div>
                <h4>professional SERVICES</h4>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>
        </div>
    </section>

    <!-- service section -->
    <section id="services">
        <h1>OUR SERVICES</h1>
        <div id="service-wrapper">
            <div class="ser-card">
                <div class="ser-img">
                    <h2>construction Management</h2>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum,
                    labore. Maiores provident tempore pariatur voluptatem aut mollitia
                    asperiores distinctio aliquid. Beatae tenetur tempora, voluptatem
                    quaerat rem harum amet aut nobis.
                </p>
                <button class="btn">show more</button>
            </div>

            <div class="ser-card">
                <div class="ser-img">
                    <h2>renovation</h2>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum,
                    labore. Maiores provident tempore pariatur voluptatem aut mollitia
                    asperiores distinctio aliquid. Beatae tenetur tempora, voluptatem
                    quaerat rem harum amet aut nobis.
                </p>
                <button class="btn">show more</button>
            </div>

            <div class="ser-card">
                <div class="ser-img">
                    <h2>architecture</h2>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum,
                    labore. Maiores provident tempore pariatur voluptatem aut mollitia
                    asperiores distinctio aliquid. Beatae tenetur tempora, voluptatem
                    quaerat rem harum amet aut nobis.
                </p>
                <button class="btn">show more</button>
            </div>
        </div>
    </section>

    <!-- more section -->
    <section id="main-slider-body">

        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    pre
                </button>
                <ul class="image-list">
                    <img class="image-item" src="asset/image/img-1.jpg" alt="img-1" />
                    <img class="image-item" src="asset/image/img-2.jpg" alt="img-2" />
                    <img class="image-item" src="asset/image/img-3.jpg" alt="img-3" />
                    <img class="image-item" src="asset/image/img-4.jpg" alt="img-4" />
                    <img class="image-item" src="asset/image/img-5.jpg" alt="img-5" />
                    <img class="image-item" src="asset/image/img-6.jpg" alt="img-6" />
                    <img class="image-item" src="asset/image/img-7.jpg" alt="img-7" />
                    <img class="image-item" src="asset/image/img-8.jpg" alt="img-8" />
                    <img class="image-item" src="asset/image/img-9.jpg" alt="img-9" />
                    <img class="image-item" src="asset/image/img-10.jpg" alt="img-10" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    next
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- customer service -->
    <section id="customer-servivce">
        <h1>Testimonial</h1>
        <p id="customer-para">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
            officia porroadipisicing elit. Earum accusantium voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elitdolor pariatur.
            Minus, pariatur.
        </p>

        <div class="customer-service-warpper">
            <div class="message">
                <img src="asset/Image/blockquote2.png " alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum
                    accusantium voluptatem id est sit dolor, soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitis soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitissoluta molestiae eum, .
                </p>
                <img src="asset/Image/block-ico1.png" alt="" class="icon" />
            </div>
            <div class="message">
                <img src="asset/Image/blockquote1.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum
                    accusantium voluptatem id est sit dolor, soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitis soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitissoluta molestiae eum, .
                </p>
                <img src="asset/Image/block-ico1.png" alt="" class="icon" />
            </div>
            <div class="message">
                <img src="asset/Image/blockquote2.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum
                    accusantium voluptatem id est sit dolor, soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitis soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitissoluta molestiae eum, .
                </p>
                <img src="asset/Image/block-ico1.png" alt="" class="icon" />
            </div>
        </div>

    </section>

@include("myapp.layouts.footer")
</body>
</html>