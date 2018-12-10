@extends('layouts.admin')
@section('content')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Frotas</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item active">Frotas</li>
            </ol>
        </div>       
    </div>

<div class="row">


<div class="col-md-6 col-lg-6">
    <div class="card">
                            <div class="card-body bg-info">
                                <h4 class="text-white card-title">Cadastro</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-7"></h6>
                               
                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                              
                                </div>
                                 <h2 class="font-light m-b-0"></h2>
                            </div>
                        </div>

                         <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                             
                                    <h2 class="font-light m-b-0">Controle de Movimentação</h2>
                                    <h6 class="text-muted">XXXX</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                                </div>
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