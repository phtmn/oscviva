<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('imgs/favicon.ico')}}">
    {{--<title>{{ config('app.name', 'OSC VIVA') }}</title>--}}
    <title>OSCViva</title>

    <link href="{{ asset('vendor/material-lite/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/material-lite/lite/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/material-lite/lite/css/colors/blue.css') }}" rel="stylesheet">
    @yield('css')


</head>
    <body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
            
            @include('layouts.partes.menu-admin-superior')
            @include('layouts.partes.menu-admin-lateral')
            
            <div class="page-wrapper">
                <div class="container-fluid">
                    @yield('content')               
                </div>
                
            <footer class="footer">
               <center> © 2018 Todos os Direitos Reservados - <strong title="Versão:1.1.0" data-toggle="tooltip"> REDE DE CONEXÃO </strong></center>
            </footer>
                  
    </div>
        <script src="{{ asset('vendor/material-lite/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/lite/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/lite/js/waves.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/lite/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <script src="{{ asset('vendor/material-lite/lite/js/custom.min.js')}}"></script>
       @yield('js')
    </body>
</html>
