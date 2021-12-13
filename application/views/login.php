<!DOCTYPE html>
<html>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/maple-admin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 07:23:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>SMART ICU</title>
    <!-- Bootstrap CSS -->
    <link href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form  action="<?php echo site_url('Login/proses') ?>" method="post" class="form-horizontal m-t-40">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Sign In</h3>
                            <p class="text-muted">Selamat Datang SMART ICU PENS</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-5 col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                        </div>
                        <div class="col-md-7 col-xs-12 m-t-5 text-right"><a href="recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Lupa Password?</a></div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Tidak Punya Akun ?<a href="register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
          
        </div>
    </section>
    <!-- jQuery -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/maple-admin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 07:23:32 GMT -->
</html>
