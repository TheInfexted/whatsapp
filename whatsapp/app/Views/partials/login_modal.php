<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="<?= base_url('login') ?>" method="post">
                <?= csrf_field() ?>
                <label>Email / Username</label>
                <input type="text" name="username" required />
                <br />

                <label>Password</label>
                <input type="password" name="password" required />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" name="remember" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="<?= base_url('register') ?>" method="post">
                <?= csrf_field() ?>
                <label>Full Name</label>
                <input type="text" name="fullname" required />
                <br />

                <label>Email Address</label>
                <input type="email" name="email" required />
                <br />

                <label>Password</label>
                <input type="password" name="password" required minlength="6" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" name="updates" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>

        <!-- Initial Content -->
        <div class="social_login">
            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>
    </section>
</div>