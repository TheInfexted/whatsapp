<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="pricing-tables" style="padding-top: 180px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8-lg-2">
                <div class="section-heading">
                    <h4>Affordable <em>Pricing Plans</em> For Your Business</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Choose the plan that fits your needs and budget</p>
                </div>
            </div>
            
            <?php foreach ($plans as $plan): ?>
            <div class="col-lg-4">
                <div class="pricing-item-<?= $plan['is_featured'] ? 'pro' : 'regular' ?>">
                    <span class="price"><?= $plan['price'] ?></span>
                    <h4><?= $plan['name'] ?></h4>
                    <div class="icon">
                        <img src="<?= base_url('assets/img/pricing-table-01.png') ?>" alt="">
                    </div>
                    <ul>
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li><?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="border-button">
                        <a href="<?= base_url('subscribe/'.$plan['id']) ?>">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>


<?php $this->endSection(); ?>