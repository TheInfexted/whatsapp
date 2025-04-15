<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="services section" style="padding-top: 180px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Our <em>Services &amp; Features</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Explore our complete range of messaging solutions designed to help your business grow</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="col-lg-6 mb-4">
                <div class="service-item <?= $service['class'] ?>">
                    <div class="icon"></div>
                    <h4><?= $service['name'] ?></h4>
                    <p><?= $service['short_description'] ?></p>
                    <div class="text-button">
                        <a href="<?= base_url('services/' . $service['id']) ?>">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>