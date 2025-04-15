<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="transactions-section" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4>Your <em>Transaction History</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>View all your transactions with Q360.</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Transaction History</h5>
                    </div>
                    <div class="card-body">
                        <?php if (empty($transactions)): ?>
                            <div class="alert alert-info">
                                You don't have any transactions yet.
                            </div>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Date</th>
                                            <th>Package</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transactions as $transaction): ?>
                                        <tr>
                                            <td>#<?= $transaction['transaction_id'] ?></td>
                                            <td><?= date('d M Y', strtotime($transaction['created_date'])) ?></td>
                                            <td><?= $transaction['packages'] ?></td>
                                            <td>RM <?= number_format($transaction['actual_amount'], 2) ?></td>
                                            <td>
                                                <?php if ($transaction['payment_status'] == 'completed'): ?>
                                                    <span class="badge bg-success">Completed</span>
                                                <?php elseif ($transaction['payment_status'] == 'pending'): ?>
                                                    <span class="badge bg-warning">Pending</span>
                                                <?php else: ?>
                                                    <span class="badge bg-danger">Failed</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('user/subscription/' . $transaction['transaction_id']) ?>" class="btn btn-sm btn-info">View Details</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <a href="<?= base_url('user/dashboard') ?>" class="btn btn-primary">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>