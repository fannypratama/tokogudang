<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="<?= base_url('auth/registration'); ?>" method="post">
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input value="<?= set_value('name'); ?>" class="form-control" type="text" placeholder="Name" name="name">
                        <?= form_error('name') ?>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input value="<?= set_value('email'); ?>" class="form-control" type="text" placeholder="Email" name="email">
                        <?= form_error('email') ?>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" placeholder="Password" name="password1">
                        <?= form_error('password1') ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" placeholder="Confirm Password" name="password2">
                        <?= form_error('password1') ?>
                    </div>
                </div>

                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Already have an account? <a href="<?= base_url('auth') ?>" class="text-primary m-l-5"><b>Sign In</b></a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>