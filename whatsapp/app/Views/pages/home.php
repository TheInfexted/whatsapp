<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<!-- Main Banner Area Start -->
<div id="home" class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Revolutionize Your Messaging with Q360</h2>
                                    <p>Send smarter, scale faster. Q360 transforms how you connect with customers — simple, powerful, unstoppable.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="<?= base_url('pricing') ?>">View Pricing <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="mailto:sales@julang-network.com?subject=Inquiry%20about%20Q360%20Services">Get in Touch <i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= base_url('assets/img/slider-dec.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Banner Area End -->

<!-- Services Section Start -->
<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Unlock innovative features crafted to enhance your messaging strategy and maximize results.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="service-item first-service">
                    <div class="icon"></div>
                    <h4>API Support</h4>
                    <p>Unlock powerful connectivity with our robust API support. Easily integrate our messaging platform into your existing systems and workflows.</p>
                    <div class="text-button">
                        <a href="<?= base_url('services/1') ?>">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item second-service">
                    <div class="icon"></div>
                    <h4>Rocket Speed of App</h4>
                    <p>Experience lightning-fast performance with our app optimization designed for minimal load times and maximum efficiency.</p>
                    <div class="text-button">
                        <a href="<?= base_url('services/2') ?>">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item third-service">
                    <div class="icon"></div>
                    <h4>Multiple Devices</h4>
                    <p>We provide the option of adding up to 10 Devices per routing in one account to provide you with better work efficiency.</p>
                    <div class="text-button">
                        <a href="<?= base_url('services/3') ?>">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item fourth-service">
                    <div class="icon"></div>
                    <h4>24/7 Help &amp; Support</h4>
                    <p>Get round-the-clock assistance from our dedicated support team — whenever you need help, we're just a message away.</p>
                    <div class="text-button">
                        <a href="<?= base_url('services/4') ?>">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- About Section Start -->
<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h4>About <em>What We Do</em> &amp; Who We Are</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>We specialize in providing seamless communication solutions to help businesses stay connected, resolve technical issues, 
                        and grow confidently in a digital world.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="<?= base_url('about') ?>">Message Delivery Assurance</a></h4>
                            <p>We ensure reliable delivery of your messages with tracking, and status reports to guarantee communication success.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="<?= base_url('about') ?>">24/7 Support &amp; Help</a></h4>
                            <p>Our expert team is available around the clock to assist you with any questions or urgent problems so ensure a seemless experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="<?= base_url('about') ?>">Fixing Issues About</a></h4>
                            <p>We handle troubleshooting for software, hardware, and network errors to keep your operations running smoothly.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="<?= base_url('about') ?>">Advanced Analytics</a></h4>
                            <p>Gain insights with detailed reports on message history, and message blasting to optimize your communication strategies.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p>Our mission is to help businesses communicate effectively with their customers through reliable, scalable messaging solutions.</p>
                        <div class="gradient-button">
                            <a href="<?= base_url('pricing') ?>">Start Using Our Services Today!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="<?= base_url('assets/img/about-right-dec.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Testimonials Section Start -->
<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Users share their experiences with our messaging platform</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="menu">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>B*** Y***</h4>
                                                    <span class="date">30 November 2024</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Financial Apps</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>D*** Y***</h4>
                                                    <span class="date">29 November 2024</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Digital Business</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>M*** L***</h4>
                                                    <span class="date">27 August 2024</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Business &amp; Economics</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-5">
                                <ul class="nacc">
                                    <li class="active">
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= base_url('assets/img/quote.png') ?>" alt="">
                                                            <p>"Incredible service! Fast, reliable, and super easy to use. 
                                                                I managed to send thousands of messages without any issues. Customer support is also very responsive. Highly recommended!"</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <div class="right-content">
                                                                <h4>B*** Y***</h4>
                                                                <span>Financial Services</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= base_url('assets/img/quote.png') ?>" alt="">
                                                            <p>"Really happy with the overall experience. The delivery speed is great and the interface is user-friendly. 
                                                                A few minor improvements could make it perfect, but it's already way better than other services I've tried."</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <div class="right-content">
                                                                <h4>D*** Y***</h4>
                                                                <span>Marketing Director</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= base_url('assets/img/quote.png') ?>" alt="">
                                                            <p>"Almost flawless! I love how simple it is to upload contacts and schedule messages. 
                                                                The analytics feature is a big plus too. Just wish there were a few more templates to choose from."</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <div class="right-content">
                                                                <h4>M*** L***</h4>
                                                                <span>Business Analyst</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Section End -->

<!-- Pricing Section Preview -->
<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>We Have The Best <em>Prices</em> For Your Business</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Choose the plan that fits your needs and budget. All pricings listed are before subject to 8% SST.</p>
                </div>
            </div>
            
            <!-- Featured pricing plan here -->
            <!-- Replace your current pricing section with this -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item-pro">
                        <span class="price">RM188</span>
                        <h4>Professional Plan</h4>
                        <div class="icon">
                            <img src="<?= base_url('assets/img/pricing-table-01.png') ?>" alt="">
                        </div>
                        <ul>
                            <li>12 Months Plan</li>
                            <li>24/7 Customer Service</li>
                            <li>Custom bulk-import contact book</li>
                            <li>Blast Sending</li>
                            <li>Campaign Features</li>
                            <li>UNLIMITED Sends</li>
                            <li>Up to 10 Devices in Routing</li>
                        </ul>
                        <div class="border-button">
                            <a href="<?= base_url('pricing') ?>">View Plan Details</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item-pro">
                        <span class="price">RM250</span>
                        <h4>Basic Plan</h4>
                        <div class="icon">
                            <img src="<?= base_url('assets/img/pricing-table-01.png') ?>" alt="">
                        </div>
                        <ul>
                            <li>6 Months Plan</li>
                            <li>24/7 Customer Service</li>
                            <li>Custom bulk-import contact book</li>
                            <li>Blast Sending</li>
                            <li>Campaign Features</li>
                            <li>UNLIMITED Sends</li>
                            <li>Up to 5 Devices in Routing</li>
                        </ul>
                        <div class="border-button">
                            <a href="<?= base_url('pricing') ?>">View Plan Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Section Preview End -->

<?php $this->endSection(); ?>