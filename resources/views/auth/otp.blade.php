<!doctype html>
<html lang="en">

<head>
    <title>:: Bank NFC :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Antrack Admin">
    <meta name="author" content="Waqar">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/color_skins.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="theme-orange">
    <!-- WRAPPER -->
    <div id="wrapper" class="auth-main">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{route("home")}}">
                            <img src="{{asset('public/assets/images/logo.webp')}}" class="d-inline-block align-top mr-2 img-fluid" alt="logo" width="100">
                        </a>
                    </nav>
                </div>
                <div class="col-lg-8">
                    <div class="auth_detail">
                        <h2 class="text-monospace">
                        Verify OTP code
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="background-color: lightgrey; border-color: lightgrey;">
                        <div class="header">
                            <p class="lead" style="color: black;">Verify Code</p>
                        </div>
                        <div class="body">
                            <form method="POST" class="form-auth-small" action="{{route('otppost')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input name="email" type="email" class="form-control" id="signin-email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input name="code" type="text" class="form-control" id="signin-email" value="" placeholder="Code" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password" class="form-control" id="signin-password" value="" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #005468; border-color: #005468;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>

    <script>
        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{!! session('error') !!}");

        @endif

        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");

        @endif
    </script>
</body>

</html>