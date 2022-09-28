
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{url('assets/css/selectric.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Register</h4></div>

                        <div class="card-body">
                            <form action="{{route('user.store')}}" method="POST">@csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Last Name</label>
                                        <input id="last_name" type="text" class="form-control" name="last_name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_name">User Name</label>
                                    <input id="user_name" type="text" class="form-control" name="user_name">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password-confirm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="phone" class="d-block">Phone</label>
                                        <input id="phone" type="text" class="form-control pwstrength" data-indicator="pwindicator" name="phone">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="address" class="d-block">Address</label>
                                        <input id="address" type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button><br>
                                    <a href="{{route('auth.login')}}" class="btn btn-primary btn-lg btn-block" >Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2022
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/popper.js')}}"></script>
<script src="{{url('assets/js/tooltip.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{url('assets/js/moment.min.js')}}"></script>
<script src="{{url('assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{url('assets/js/jquery.pwstrength.min.js')}}"></script>
<script src="{{url('assets/js/jquery.selectric.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{url('assets/js/auth-register.js')}}"></script>

<!-- Template JS File -->
<script src="{{url('assets/js/scripts.js')}}"></script>
<script src="{{url('assets/js/custom.js')}}"></script>
</body>
</html>
