<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="testimonials section" style="padding-top: 180px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>What Our <em>Clients Say</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Real feedback from businesses using our messaging platform</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="col-lg-6 mb-4">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <div class="testimonial-quote">
                            <img src="<?= base_url('assets/img/quote.png') ?>" alt="">
                            <p><?= $testimonial['quote'] ?></p>
                        </div>
                        
                        <div class="client-info">
                            <div class="client-image">
                                <img src="<?= base_url('assets/img/client-image-' . $testimonial['id'] . '.jpg') ?>" alt="">
                            </div>
                            
                            <div class="client-details">
                                <h5><?= $testimonial['name'] ?></h5>
                                <span><?= $testimonial['position'] ?></span>
                                <div class="client-rating">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <?php if ($i < floor($testimonial['rating'])): ?>
                                            <i class="fa fa-star"></i>
                                        <?php elseif ($i < $testimonial['rating']): ?>
                                            <i class="fa fa-star-half-alt"></i>
                                        <?php else: ?>
                                            <i class="far fa-star"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <span class="rating-text"><?= $testimonial['rating'] ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-meta">
                            <span class="date"><?= $testimonial['date'] ?></span>
                            <span class="category"><?= $testimonial['category'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <div class="gradient-button">
                <a href="mailto:sales@julang-network.com?subject=My%20Q360%20Experience">Share Your Experience</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>