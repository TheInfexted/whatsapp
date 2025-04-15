<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="dashboard-section" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4>Your <em>Dashboard</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>Welcome back, <?= session()->get('username') ?>! Manage your subscriptions and view your transaction history.</p>
                </div>
            </div>
        </div>
        
        <!-- Active Subscriptions Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <h4>Your Active Subscriptions</h4>
            </div>
            
            <?php if (empty($transactions)): ?>
            <div class="col-lg-12">
                <div class="alert alert-info">
                    You don't have any active subscriptions yet. <a href="<?= base_url('pricing') ?>">Browse our packages</a> to get started.
                </div>
            </div>
            <?php else: ?>
                <?php foreach ($transactions as $transaction): ?>
                <div class="col-lg-4 mb-4">
                    <div class="subscription-card">
                        <div class="card">
                            <div class="card-header">
                                <h5><?= $transaction['packages'] ?></h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong>Purchase Date:</strong> <?= date('d M Y', strtotime($transaction['created_date'])) ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Amount Paid:</strong> RM <?= number_format($transaction['actual_amount'], 2) ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Status:</strong> 
                                        <span class="badge bg-success"><?= ucfirst($transaction['payment_status']) ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Valid Until:</strong> 
                                        <?php 
                                        $validPeriod = isset($transaction['valid_period']) ? $transaction['valid_period'] : 12;
                                        $endDate = date('d M Y', strtotime($transaction['created_date'] . " +{$validPeriod} months"));
                                        echo $endDate;
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="<?= base_url('user/subscription/' . $transaction['transaction_id']) ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <!-- Recent Transactions Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <h4>Recent Transactions</h4>
            </div>
            
            <?php if (empty($transactions)): ?>
            <div class="col-lg-12">
                <div class="alert alert-info">
                    You don't have any transactions yet.
                </div>
            </div>
            <?php else: ?>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Package</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_slice($transactions, 0, 5) as $transaction): ?>
                            <tr>
                                <td><?= date('d M Y', strtotime($transaction['created_date'])) ?></td>
                                <td><?= $transaction['packages'] ?></td>
                                <td>RM <?= number_format($transaction['actual_amount'], 2) ?></td>
                                <td>
                                    <span class="badge bg-success"><?= ucfirst($transaction['payment_status']) ?></span>
                                </td>
                                <td>
                                    <a href="<?= base_url('user/subscription/' . $transaction['transaction_id']) ?>" class="btn btn-sm btn-info">Details</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <?php if (count($transactions) > 5): ?>
                <div class="text-center mt-3">
                    <a href="<?= base_url('user/transactions') ?>" class="btn btn-primary">View All Transactions</a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>