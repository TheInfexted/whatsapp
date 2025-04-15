<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?= base_url() ?>" class="logo">
                        <img src="<?= base_url('assets/img/q360logo.png') ?>" alt="Q360" style="max-height: 60px; width: auto;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
                        <?php if (session()->get('logged_in')): ?>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user"></i> <?= session()->get('username') ?></a>
                            <ul>
                                <li><a href="<?= base_url('user/dashboard') ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                <li><a href="<?= base_url('user/transactions') ?>"><i class="fa fa-history"></i> Transactions</a></li>
                                <li><a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div>
                        </li>
                        <?php endif; ?>
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>