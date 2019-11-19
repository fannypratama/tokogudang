<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div>
    <?= $this->session->flashdata('message'); ?>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form method="post" class="form-horizontal form-material" id="loginform" action="<?= base_url('auth'); ?>">
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email') ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password" value="<?= set_value('password'); ?>">
                        <?= form_error('password') ?>
                    </div>
                </div>

                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Don't have an account? <a href="<?= base_url('auth/registration') ?>" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>