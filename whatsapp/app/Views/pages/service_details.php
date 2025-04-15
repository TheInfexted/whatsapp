<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="service-details section" style="padding-top: 180px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8-lg-2">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4><?= $service['name'] ?></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p><?= $service['short_description'] ?></p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="service-content">
                    <h4>Service Overview</h4>
                    <p><?= $service['description'] ?></p>
                    
                    <h4 class="mt-4">Key Features</h4>
                    <ul class="features-list">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li><i class="fa fa-check"></i> <?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <div class="gradient-button mt-5">
                        <a href="<?= base_url('pricing') ?>">Get Started with This Service</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-image">
                    <img src="<?= base_url('assets/img/' . $service['class'] . '-detail.png') ?>" alt="<?= $service['name'] ?>" class="img-fluid rounded" style="width: 50px; height: 50px;">
                </div>
                
                <div class="service-cta mt-4 p-4">
                    <h4>Need More Information?</h4>
                    <p>Our team is ready to answer any questions you might have about this service.</p>
                    <div class="border-button">
                        <a href="mailto:sales@julang-network.com?subject=Question%20about%20<?= urlencode($service['name']) ?>%20Service">Email Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="related-services section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4>Other Services You Might Need</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Related services would go here -->
            <div class="col-lg-12 mt-4">
                <div class="gradient-button">
                    <a href="<?= base_url('services') ?>">View All Services</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>