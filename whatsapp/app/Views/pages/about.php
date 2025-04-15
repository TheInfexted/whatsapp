<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="about-us section" style="padding-top: 180px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>About <em>Our Company</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Learn about our mission, vision, and the team behind Q360</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content">
                    <h4>Our Story</h4>
                    <p>Founded in 2020, Q360 was born from the vision to revolutionize how businesses communicate with their customers. We recognized that existing messaging solutions were either too complex, too limited, or too expensive for most businesses.</p>
                    
                    <p>Our team of experts in telecommunications, software development, and customer service came together to create a solution that would be powerful yet user-friendly, scalable yet affordable.</p>
                    
                    <h4 class="mt-4">Our Mission</h4>
                    <p>Our mission is to empower businesses of all sizes to communicate effectively with their customers through reliable, scalable messaging solutions that drive engagement and growth.</p>
                    
                    <h4 class="mt-4">Our Values</h4>
                    <ul>
                        <li><strong>Innovation:</strong> We're constantly seeking new ways to improve our services</li>
                        <li><strong>Reliability:</strong> We understand that communication is critical to your business</li>
                        <li><strong>Customer Focus:</strong> Your success is our success</li>
                        <li><strong>Integrity:</strong> We operate with honesty and transparency</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="<?= base_url('assets/img/about-image.jpg') ?>" alt="About Q360" class="img-fluid rounded">
                </div>
                
                <div class="key-features mt-5">
                    <h4>What Sets Us Apart</h4>
                    <div class="row">
                        <?php foreach ($features as $feature): ?>
                        <div class="col-lg-6 mt-3">
                            <div class="box-item">
                                <h4><?= $feature['title'] ?></h4>
                                <p><?= $feature['description'] ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>