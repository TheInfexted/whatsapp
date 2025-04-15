<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="subscribe-page" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4>Complete Your <em>Subscription</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>You're about to subscribe to our <?= $package['package_name'] ?> plan</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Subscription Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Package Details</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Package:</th>
                                        <td><?= $package['package_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td>RM <?= number_format($package['price'], 0) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Duration:</th>
                                        <td><?= $package['valid_period'] ?> months</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>User Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Username:</th>
                                        <td><?= session()->get('username') ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td><?= session()->get('email') ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="package-description mt-4">
                            <h5>Package Description</h5>
                            <p><?= $package['package_desc'] ?? 'No description available' ?></p>
                        </div>
                        
                        <div class="payment-summary mt-4">
                            <h5>Payment Summary</h5>
                            <table class="table">
                                <tr>
                                    <th>Subscription Fee:</th>
                                    <td class="text-right">RM <?= number_format($package['price'] * $package['valid_period'], 0) ?></td>
                                </tr>
                                <tr>
                                    <th>8% SST:</th>
                                    <td class="text-right">RM <?= number_format($package['price'] * $package['valid_period'] * 0.08, 2) ?></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <th>Total Amount:</th>
                                    <td class="text-right">RM <?= number_format($package['price'] * $package['valid_period'] * 1.08, 2) ?></td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="payment-buttons mt-4 text-center">
                            <form action="<?= base_url('subscribe/process/' . $package['package_id']) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-primary btn-lg mx-2">Confirm and Pay</button>
                            </form>
                            <a href="<?= base_url('subscribe/cancel') ?>" class="btn btn-secondary btn-lg mx-2">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>