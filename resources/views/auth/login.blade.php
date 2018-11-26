
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('imgs/favicon.ico')}}">
    <title>COOPVIVA</title>
    <!-- Bootstrap Core CSS -->
    <!-- Styles -->
    <link href="{{ asset('vendor/material-lite/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{ asset('vendor/material-lite/lite/css/style.css') }}" rel="stylesheet">
    <!-- Color Theme -->
    <link href="{{ asset('vendor/material-lite/lite/css/colors/blue.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    
    <section id="wrapper" class="login-register bg-success" style="background-image:url(imgs/fundo.png);">
        <div class="login-box card">
        @if(Session::has('mensagem'))
            <div class="alert {{ Session::get('mensagem')['class'] }}" role="alert">
                     {{ Session::get('mensagem')['msg'] }}
            </div>
        @endif
            
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <a href="javascript:void(0)" class="text-center db"><img src="{{asset('imgs/logo-oscviva-versao1.png')}}" alt="Home" /><br/>

                    <div class="form-group m-t-40 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            
                            <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span class="label label-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required autofocus placeholder="Senha" name="password" value="{{ old('password') }}">
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block text-center">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <div class="d-flex no-block align-items-center">
                            <div class="ml-auto">
                                <a href="{{ route('password.request') }}" id="to-recover" class="text-muted"><i class="fa fa-lock m-r-5"></i><strong> Esqueceu a Senha? </strong></a> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                           <!-- <div class="social">
                                <button class="btn btn-facebook" data-toggle="tooltip" title="Login com Facebook | Em breve"> <i aria-hidden="true" class="mdi mdi-facebook"></i> </button>
                                <button class="btn btn-googleplus" data-toggle="tooltip" title="Login com Google | Em breve"> <i aria-hidden="true" class="mdi mdi-google"></i> </button>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center"> 

                            <a href="{{ route('register') }}" class="text-primary m-l-5">  Ainda não tem uma conta? <strong> Cadastre-se </strong></a>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/material-lite/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('vendor/material-lite/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('vendor/material-lite/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('vendor/material-lite/lite/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{asset('vendor/material-lite/lite/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('vendor/material-lite/lite/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('vendor/material-lite/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('vendor/material-lite/lite/js/custom.min.js')}}"></script>
</body>

</html>