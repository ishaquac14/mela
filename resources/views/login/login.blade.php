<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mela | Login</title>

    <!-- Custom fonts for this template-->
    <link href={{ url('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ url('backend/css/sb-admin-2.min.css') }} rel="stylesheet">

</head>

<body class="bg-gradient-primary d-flex justify-content-center align-items-center mt-5">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="card text-center col-lg-5">
                <div class="card-header">
                    <img src="{{ url('frontend/images/logo.png') }}" alt="" width="200" height="20">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="h5 text-gray-900 mb-4">Welcome Back!</h3>
                    </div>
                    <form class="user">
                        <div class="form-group mt-4">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>
                            </div>
                        </div>
                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                            Login
                        </a>
                    </form>
                </div>
                <div class="card-footer text-body-secondary">
                    <small class="mt-3 mb-3 text-body-secondary">&copy;2023 - IT Development</small>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ url('backend/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ url('backend/js/sb-admin-2.min.js') }}></script>

</body>

</html>
