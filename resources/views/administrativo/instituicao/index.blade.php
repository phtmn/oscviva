@extends('layouts.admin')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
      <h3 class="text-themecolor">Administrativo</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
        <li class="breadcrumb-item active">Administrativo</li>
        <li class="breadcrumb-item active">Instituicao</li>
    </ol>
</div>
        <!-- <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>CANCELADOS</small></h6>
                        <h4 class="m-t-0 text-info">{{ $data->where('canceled',1)->count()}}</h4>
                    </div>
                </div>

                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>TOTAL DE PATROCINIOS</small></h6>
                        <h4 class="m-t-0 text-info">$ {{ number_format($data->where('sponsor_type','=','PA')->sum('amount'),2,',','.')}}</h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>TOTAL DE DOAÇOES</small></h6>
                        <h4 class="m-t-0 text-primary">$ {{ number_format($data->where('sponsor_type','=','DD')->sum('amount'),2,',','.')}}</h4>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('imobilizado.create')}}" class="btn btn-info">Cadastrar</a>
            </div>
                        
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>!</th>
                    </thead>
                    <tbody>
                    @forelse($data as $d)
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
                                        <a class="dropdown-item" href="{{route('pessoas.edit',$d->id)}}">Editar</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <label class="label label-danger">Ainda não há registros!</label>
                                <hr>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

    <div class="row">


        <div class="col-lg-3 col-xlg-3 col-md-5">
            <div class="card blog-widget">
                <div class="card-body">
                    <div class="blog-image">
                    <!--    <img src="" alt="img" class="img-responsive" /> -->
                    </div>
                    <h3>Business development new rules for 2017</h3>
                    <label class="label label-rounded label-success">Dados Cadastrais</label>
                    <p class="m-t-20 m-b-20">
                        Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    </p>
                    <label class="label label-rounded label-success">Endereço</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Contábil</h3>
                                        <h6 class="card-subtitle">March 2017</h6>
                                    </div>
                                </div>
                           
                            </div>
                        </div>

                            </div>

             <div class="col-lg-4 col-md-4">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Diretoria</h3>
                                        <h6 class="card-subtitle">March 2017</h6>
                                    </div>
                                </div>
                           
                            </div>
                        </div>  
                         </div>           

            <div class="card">
                <div class="card-body bg-info">
                    <h4 class="text-white card-title">Certidões</h4>
                    <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
                </div>
                <div class="card-body">
                    <div class="message-box contact-box">
                        <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                        <div class="message-widget contact-widget">
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                </div>
                            </a>
                            <!-- Message -->
                          <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                </div>
                            </a>
                            <!-- Message -->
                        
                        </div>
                    </div>
                </div>
            </div>

             <div class="card">
                <div class="card-body bg-info">
                    <h4 class="text-white card-title">Atas</h4>
                    <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
                </div>
                <div class="card-body">
                    <div class="message-box contact-box">
                        <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                        <div class="message-widget contact-widget">
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                </div>
                            </a>
                            <!-- Message -->
                          <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                </div>
                            </a>
                            <!-- Message -->
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    @endsection