@extends('layouts.admin')
@section('content')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Filiados</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item active">Filiados</li>
            </ol>
        </div>       
    </div>

<div class="row">

    <div class="col-lg-6 col-xlg-3 col-md-5">
                        <div class="card blog-widget">
                            <div class="card-body">
                                <div class="blog-image"><img src="{{asset('imgs/img1.jpg')}}" alt="img" class="img-responsive" /></div>
                                <h3>Business development new rules for 2017</h3>
                               <center> <label class="label label-rounded label-success">Registro</label> </center>
                                <p class="m-t-20 m-b-20">
                                    Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut
                                </p>                           
                            </div>
                        </div>
                    </div>

   <div class="col-lg-6 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Relatórios</h3>
                                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Ample</h6>
                                                    </li>
                                                    <li>
                                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Pixel</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                           </div>           


</div>


@endsection