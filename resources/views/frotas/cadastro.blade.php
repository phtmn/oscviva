@extends('layouts.admin')
@section('content')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Frotas</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item active">Frotas</li>
                <li class="breadcrumb-item active">Cadastros</li>
            </ol>
        </div>       
    </div>

<div class="row">


<div class="col-md-8 col-lg-8">
    <div class="card">
                            <div class="card-body bg-info">
                                <h4 class="text-white card-title">Cadastro</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-7"></h6>
                               
                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box">
                                   <a href="{{route('frotas.cadveiculo')}}"> <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">add</button></h2></a>
                              
                                </div>
                                 <h2 class="font-light m-b-0"></h2>
                            </div>
                        </div>

         <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                             
                                    <h2 class="font-light m-b-0">Dados do Veículo</h2>
                                    
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>

                                      <div class="card-body">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Ano</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Placa</th>
                        <th>Chassi</th>
                        <th>Renavan</th>
                    </thead>
                    <tbody>
                   
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais opções</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                  
                        <p>Não há registros</p>
                 
                    </tbody>
                </table>

            </div>



                                </div>
                            </div>
                        </div>         

                         </div>
                 



             


</div>


@endsection