<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; PUSKESMAS</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>modules/fontawesome/css/all.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/login/') ?>img/logo.png" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url('assets/login/') ?>img/logo.png" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>

                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-body">
                                <form action="<?= base_url('auth'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="<?= base_url('register') ?>">Register</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; WRA 2024
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('assets/login/') ?>modules/jquery.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>modules/popper.js"></script>
    <script src="<?= base_url('assets/login/') ?>modules/tooltip.js"></script>
    <script src="<?= base_url('assets/login/') ?>modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>modules/moment.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url('assets/login/') ?>js/scripts.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/custom.js"></script>
</body>

</html>