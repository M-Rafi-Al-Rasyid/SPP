<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/components.css" />
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-94034622-3");
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
                            <img src="assets/img/logo.jpg" alt="logo" width="100"
                                class="shadow-light rounded-circle" />
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login Siswa</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="Cek_Login.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input id="nisn" type="text" class="form-control" name="nisn" tabindex="1"
                                            required autofocus />
                                        <div class="invalid-feedback">
                                            Please fill in your NISN
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="nis" class="control-label">NIS</label>
                                        </div>
                                        <input id="nis" type="text" class="form-control" name="nis"
                                            tabindex="2" required />
                                        <div class="invalid-feedback">
                                            please fill in your NIS
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">Login Sebagai Petugas/Admin</div>
                                </div>
                                <div class="form-group">
                                    <a href="Form-Login-Admin-Petugas.php">
                                        <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                                            Petugas/Admin
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="simple-footer">Copyright &copy; XIRPL 2023</div>
                </footer>
            </div>
    </div>
    </section>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>