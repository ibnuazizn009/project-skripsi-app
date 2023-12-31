<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/icon_title.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/login_style.css')}}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #05</h2>
				</div>
			</div> -->
            @if(session())
                @if(session()->exists('message_error'))
                    <div class="alert alert-danger justify-content-center" id="success-alert" role="alert">
                        {{session('message_error')}}
                    </div>
                @endif
            @endif
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url('{{ asset('images/bg_login.png')}}')"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>
                            <form method="POST" action="/login" class="signin-form">
                                {{ csrf_field() }}
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" required>
                                    <label class="form-control-placeholder" >Email</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="password" required>
                                    <label class="form-control-placeholder" >Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password">
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">{{ __('Remember me') }}
                                            <input type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <!-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--Alert Fade -->
    <script>
        $(document).ready(function() {
            $("#success-alert").fadeTo(2500, 500).slideUp(500, function(){
                $("#success-alert").slideUp(500);
            });
        });
    </script>
    <script src="{{ asset('js/popper.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
