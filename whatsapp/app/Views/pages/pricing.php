<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="pricing-tables" style="padding-top: 180px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8-lg-2">
                <div class="section-heading">
                    <h4>Affordable <em>Pricing Plans</em> For Your Business</h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Choose the plan that fits your needs and budget. All pricings listed are monthly payable, and before subject to 8% SST.</p>
                </div>
            </div>
            
            <?php if (empty($plans)): ?>
            <div class="col-lg-12 text-center">
                <div class="alert alert-info">
                    No active packages are available at the moment. Please check back later.
                </div>
            </div>
            <?php else: ?>
                <?php foreach ($plans as $plan): ?>
                <div class="col-lg-4">
                    <div class="pricing-item-<?= $plan['is_featured'] ? 'pro' : 'regular' ?>">
                        <span class="price"><?= $plan['price'] ?></span>
                        <h4><?= $plan['name'] ?></h4>
                        <div class="icon">
                            <img src="<?= base_url('assets/img/pricing-table-01.png') ?>" alt="">
                        </div>
                        <ul>
                            <?php if (!empty($plan['features'])): ?>
                                <?php foreach ($plan['features'] as $feature): ?>
                                <li><?= $feature ?></li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>Valid for <?= $plan['valid_period'] ?> months</li>
                                <li>Technical support included</li>
                            <?php endif; ?>
                        </ul>
                        <div class="border-button">
                            <?php if (session()->get('logged_in')): ?>
                                <a href="<?= base_url('subscribe/'.$plan['id']) ?>">Purchase This Plan Now</a>
                            <?php else: ?>
                                <a href="#" id="modal_trigger">Sign In to Subscribe</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
            
        </div>
    </div>
</div>

<?php $this->endSection(); ?>