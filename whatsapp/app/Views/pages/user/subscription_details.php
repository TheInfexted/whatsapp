<?php $this->extend('layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="subscription-details-section" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4>Subscription <em>Details</em></h4>
                    <img src="<?= base_url('assets/img/heading-line-dec.png') ?>" alt="">
                    <p>View details of your subscription to <?= $transaction['packages'] ?>.</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h5>Subscription Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Transaction Details</h6>
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Transaction ID:</th>
                                        <td>#<?= $transaction['transaction_id'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Date:</th>
                                        <td><?= date('d M Y h:i A', strtotime($transaction['created_date'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>
                                            <?php if ($transaction['payment_status'] == 'completed'): ?>
                                                <span class="badge bg-success">Completed</span>
                                            <?php elseif ($transaction['payment_status'] == 'pending'): ?>
                                                <span class="badge bg-warning">Pending</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Failed</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h6>Package Information</h6>
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Package:</th>
                                        <td><?= $transaction['packages'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Amount:</th>
                                        <td>RM <?= number_format($transaction['amount'], 2) ?></td>
                                    </tr>
                                    <tr>
                                        <th>SST (8%):</th>
                                        <td>RM <?= number_format($transaction['charges'], 2) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>RM <?= number_format($transaction['actual_amount'], 2) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6>Subscription Status</h6>
                                <div class="subscription-status p-3 bg-light rounded">
                                    <?php 
                                    // Calculate subscription validity
                                    $validPeriod = 12; // Default to 12 months if not available
                                    if (isset($transaction['valid_period'])) {
                                        $validPeriod = $transaction['valid_period'];
                                    }
                                    
                                    $startDate = new DateTime($transaction['created_date']);
                                    $endDate = clone $startDate;
                                    $endDate->modify("+{$validPeriod} months");
                                    $now = new DateTime();
                                    
                                    // Calculate days remaining
                                    $daysTotal = $startDate->diff($endDate)->days;
                                    $daysElapsed = $startDate->diff($now)->days;
                                    $daysRemaining = $endDate->diff($now)->days;
                                    
                                    // Calculate percentage of subscription used
                                    $percentUsed = min(100, max(0, ($daysElapsed / $daysTotal) * 100));
                                    
                                    // Determine status text and color
                                    $statusText = "Active";
                                    $statusColor = "success";
                                    if ($now > $endDate) {
                                        $statusText = "Expired";
                                        $statusColor = "danger";
                                    } elseif ($percentUsed > 90) {
                                        $statusText = "Expiring Soon";
                                        $statusColor = "warning";
                                    }
                                    ?>
                                    
                                    <p><strong>Status:</strong> <span class="badge bg-<?= $statusColor ?>"><?= $statusText ?></span></p>
                                    <p><strong>Subscription Period:</strong> 
                                        <?= $startDate->format('d M Y') ?> to <?= $endDate->format('d M Y') ?>
                                    </p>
                                    
                                    <?php if ($now <= $endDate): ?>
                                    <p><strong>Days Remaining:</strong> <?= $daysRemaining ?> days</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-<?= $statusColor ?>" role="progressbar" 
                                             style="width: <?= $percentUsed ?>%" 
                                             aria-valuenow="<?= $percentUsed ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?= round($percentUsed) ?>%
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="alert alert-danger">
                                        This subscription has expired. Please purchase a new subscription to continue using our services.
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <?php if ($now > $endDate): ?>
                        <a href="<?= base_url('pricing') ?>" class="btn btn-primary">Renew Subscription</a>
                        <?php endif; ?>
                        <a href="<?= base_url('user/dashboard') ?>" class="btn btn-secondary">Back to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>