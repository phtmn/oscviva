@extends('layouts.admin')
@section('content')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Administratvo</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item active">Administratvo</li>
            </ol>
        </div>       
    </div>

<div class="row"> 

     <div class="col-lg-5 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="{{asset('imgs/profile-bg.jpg')}}" alt="Card image cap">
                            <div class="card-body little-profile text-center">
                            
                            
                                <a href="{{route('colaborador.index')}}" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Colaborador</a>

                                <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Voluntário</a>
                         
                            </div>
                        </div>                
    </div> 

     <div class="col-lg-3 col-md-4">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Imobilizado</h3>
                                        
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Arquivo Digital</h3>
                                        <!-- <h6 class="card-subtitle">Enviar Arquivos</h6>-->
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>

         <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="{{asset('imgs/profile-bg2.jpg')}}" alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img"><img src="{{asset('imgs/avatar_alobradesco.png')}}" alt="user" /></div>
                                <h3 class="m-b-0">Escola de Educação Básica e Profissional Fundação Bradesco</h3>
                                <p>Informações de Registro</p>                               
                            </div>
                        </div>                
    </div>                
                        


</div>


@endsection