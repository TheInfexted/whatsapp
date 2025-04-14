<!-- Replace your current footer section in partials/footer.php with this code -->

<footer class="footer-area">
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-content">
                        <h2>Join Our Mailing List To Receive The News & Latest Trends</h2>
                        <form id="subscribe-form" action="#" method="GET">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address..." required>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                        <p><a href="tel:01002003040">010-020-0340</a></p>
                        <p><a href="mailto:info@company.co">info@company.co</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>About Us</h4>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>Useful Links</h4>
                        <ul class="footer-links">
                            <li><a href="#">Free Apps</a></li>
                            <li><a href="#">App Engine</a></li>
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">App News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>About Our Company</h4>
                        <div class="logo">
                            <img src="<?= base_url('assets/img/white-logo.png') ?>" alt="Chain App Dev">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © <?= date('Y') ?> Chain App Dev Company. All Rights Reserved.</p>
                        <p>Design: <a href="https://templatemo.com/" target="_blank">TemplateMo</a></p>
                        <p>Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>